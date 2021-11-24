<?php

function getDist() {
  $distPath = ROOT . '/public/dist';
  $dir = scandir($distPath, 1);
  $cssFiles = [];
  $jsFiles = [];
  $styles = '';
  $scripts = '';
  
  foreach ($dir as $item) {
    $filePath = $distPath . '/' . $item;
    
    $pathInfo = pathinfo($filePath);

    if ($pathInfo['extension'] == 'js') {
      array_push($jsFiles, $item);
    } else if ($pathInfo['extension'] == 'css') {
      array_push($cssFiles, $item);
    }
  }

  foreach ($jsFiles as $fileName) {
    $scripts .= '<script src="/dist/' . $fileName . '"></script>';
  }

  foreach ($cssFiles as $fileName) {
    $styles .= '<link href="/dist/' . $fileName . '" rel="stylesheet">';
  }
  
  return [
    'styles' => $styles,
    'scripts' => $scripts
  ];
}