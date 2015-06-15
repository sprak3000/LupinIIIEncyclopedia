<?php
namespace sprak3000\lupinencyclopedia\Slim\Page;

/**
 * Custom View for rendering pages on the site
 */
use Slim;

class View extends Slim\View
{
  /**
   * @param string $pTemplate The template pathname, relative to the template base directory
   * @return string
   */
  public function render($pTemplate)
  {
    $header = (false === stripos($pTemplate, 'view/rss')) ? $this->renderPageFragment('layout/header.php') : '';

    $content = $this->renderPageFragment($pTemplate);

    $footer = (false === stripos($pTemplate, 'view/rss')) ? $this->renderPageFragment('layout/footer.php') : '';

    return $header . $content . $footer;
  }

  /**
   * Render the page fragment given by template file
   *
   * NOTE: This method should be overridden by custom view subclasses
   *
   * @param  string $pTemplate     The template pathname, relative to the template base directory
   * @param  array  $pData         Any additional data to be passed to the template.
   * @return string               The rendered template
   * @throws \RuntimeException    If resolved template pathname is not a valid file
   */
  protected function renderPageFragment($pTemplate, $pData = null)
  {
    $templatePathname = $this->getTemplatePathname($pTemplate);
    if (!is_file($templatePathname)) {
      throw new \RuntimeException("View cannot render `$pTemplate` (`$templatePathname`) because the template does not exist");
    }

    $data = array_merge($this->data->all(), (array) $pData);
    extract($data);
    ob_start();
    require $templatePathname;

    return ob_get_clean();
  }
}