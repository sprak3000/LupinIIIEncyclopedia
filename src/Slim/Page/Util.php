<?php

namespace sprak3000\lupinencyclopedia\Slim\Page;

use \Exception;
use \RecursiveDirectoryIterator;
use \RecursiveIteratorIterator;
use sprak3000\AnimeNewsNetworkDataAPI;

/**
 * Catch all helper class
 */
class Util
{
    /**
     * @param string $pDirectory The directory to gather images from
     * @param integer $pImagesPerRow Number of images per row
     * @return array Array of rows / cols of images
     */
    public function GetImagesForGallery($pDirectory, $pImagesPerRow = 4)
    {
        $images = [];
        $rows = [];

        $dirIterator = new RecursiveDirectoryIterator($pDirectory);
        $iterator = new RecursiveIteratorIterator($dirIterator, RecursiveIteratorIterator::SELF_FIRST);

        foreach ($iterator as $file) {
            if ($file->isFile()) {
                $images[] = preg_replace('/.*public(\/.*)/', '$1', $file->getPathname());
            }
        }

        sort($images);

        $currentRow = 0;
        $currentColumn = 0;
        foreach ($images as $image) {
            $rows[$currentRow][$currentColumn] = $image;
            if ($currentColumn < $pImagesPerRow - 1) {
                $currentColumn++;
            } else {
                $currentColumn = 0;
                $currentRow++;
            }
        }

        return $rows;
    }

    /**
     * @param integer $pAnimeNewsNetworkId
     * @return array Array of data
     */
    public function GetAnimeData($pAnimeNewsNetworkId)
    {
        $client = new AnimeNewsNetworkDataApi\Client();
        try {
            $data = $client->getAnime(['anime' => $pAnimeNewsNetworkId])->toArray();

            if (empty($data['anime']['staff'])) {
                return [];
            }

            // Transform the staff data into "task" buckets
            $staff = [];
            foreach ($data['anime']['staff'] as $index => $item) {
                if (!is_numeric($index)) {
                    continue;
                }

                $staff[$item['task']][] = $item['person'];
            }

            $data['calculated']['staff'] = $staff;
        } catch (Exception $e) {
            $data = [];
        }

        return $data;
    }
}
