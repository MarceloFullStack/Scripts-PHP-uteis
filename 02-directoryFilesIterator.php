<?php
/***
 * MarceloDeveloper
 * pt-Iterar sob diretório de arquivos
 * us-Iterate under file directory
*/

//pt-caminho da pasta que contém os arquivos
//us-path of the folder containing the files
$directoryImages = 'file/';

//pt-iterar sob os arquivos contidos na pasta a classe nativa DirectoryIterator espera receber o caminho da pasta que contem os arquivos
//us-iterate under the files contained in the folder the native class DirectoryIterator expects to receive the path of the folder containing the files
foreach (new DirectoryIterator($directoryImages) as $fileInfo) {
  
    // pt-ignora o . e .. que existe nas pastas
    //us-ignore him . and .. that exists in the folders
    if ($fileInfo->isDot()) continue;
    $output = "<div class='image'>";
    $output .= "<figure>";
    
    $output .= "<img style= width:300px;height:auto src='".$directoryImages.$fileInfo->getFilename()."' ></img><br />";
    $output .= "</figure>";
    $output .= "<figcaption>";
    $output .= "<a href=".$directoryImages.$fileInfo->getFilename().">Veja mais</a>";
    $output .= "</figcaption>";  
    $output .= "</div>";
    echo $output;
}
