<?php
/***
 * MarceloDeveloper
 * pt-Salvar em fotos de url em diretorio local, no exemplo ira salvar no diretorio files
 * us-Save to url photos in the local directory, in the example it will save to the files directory
*/

//pt-coloque a url da imagem aqui
//place the image url here
$urlImage = "https://s2.glbimg.com/nqgXJ6PCF-T1AAY4l-zCPxNn_vA=/0x0:976x549/600x0/smart/filters:gifv():strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2019/x/6/d7OX4gSbmIPOBJA5vYpw/cat.jpg";

//pt-escolha o nome da imagem a ser salva terminando com a extensão jpg
//us-choose the name of the image to be saved ending with the jpg extension
$path = 'file/'.uniqid().'cat.jpg';

//pt-o file_content_input espera o nome da imagem e o conteudo, nesse caso é uma imagem que pegamos com file_get_content.
//us-file_content_input expects the name of the image and the content, in this case it is an image that we took with file_get_content.
file_put_contents($path, file_get_contents($urlImage));
