<?php

namespace sprak3000\lupinencyclopedia\Slim\Page;

/**
 * Custom View for rendering pages on the site
 */
use Psr\Http\Message\ResponseInterface;

class View
{
    private string $templatePath;

    /**
     * @param string $templatePath
     */
    public function __construct(string $templatePath = '')
    {
        $this->templatePath = rtrim($templatePath, '/\\') . '/';
    }

    /**
     * @param ResponseInterface $res
     * @param string $pTemplate The template pathname, relative to the template base directory
     * @param mixed $pData Array of data to be injected into the view
     * @return ResponseInterface
     */
    public function render(ResponseInterface $res, string $pTemplate, array $pData = []): ResponseInterface
    {
        // Capture the initial status in case the template being rendered calls render for a sub-template
        $isPartial = isset($this->data['partial']);

        $header = (false === stripos($pTemplate, 'view/rss') && !$isPartial) ? $this->renderPageFragment('layout/header.php', $pData) : '';
        $content = $this->renderPageFragment($pTemplate, $pData);
        $footer = (false === stripos($pTemplate, 'view/rss') && !$isPartial) ? $this->renderPageFragment('layout/footer.php', $pData) : '';

        $res->getBody()->write($header . $content . $footer);
        return $res;
    }

    /**
     * Render the page fragment given by template file
     *
     * NOTE: This method should be overridden by custom view subclasses
     *
     * @param string $pTemplate The template pathname, relative to the template base directory
     * @param array $pData Array of data to be injected into the view
     * @return string               The rendered template
     * @throws \RuntimeException    If resolved template pathname is not a valid file
     */
    protected function renderPageFragment(string $pTemplate, array $pData = []): string
    {
        $templatePathname = $this->templatePath . $pTemplate;
        if (!is_file($templatePathname)) {
            throw new \RuntimeException("View cannot render `$pTemplate` (`$templatePathname`) because the template does not exist");
        }

        extract($pData);
        ob_start();
        require $templatePathname;

        return ob_get_clean();
    }
}
