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
      if($file->isFile()) {
        $images[] = preg_replace('/.*public(\/.*)/', '$1', $file->getPathname());
      }
    }

    sort($images);

    $rowCount = ceil(count($images) / $pImagesPerRow);
    $currentRow = 0;
    $currentColumn = 0;
    foreach($images as $image) {
      $rows[$currentRow][$currentColumn] = $image;
      if($currentColumn < $pImagesPerRow - 1) {
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
      $result = $client->getAnime(['anime' => $pAnimeNewsNetworkId]);

      // Rework the result for our needs
      $data = $result; //array ();
    } catch(Exception $e) {
      $data = [];
    }

    return $data;
  }
}