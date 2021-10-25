<?php 
use RainLab\Blog\Models\Post;use System\Models\File;use Illuminate\Support\Facades\Storage;use Barryvdh\Snappy\Facades\SnappyPdf as PDF;use Barryvdh\Snappy\Facades\SnappyImage as SnappyImage;class Cms6165dd82e8ba2462515487_45a78e2c79c85a59c601d25b137f1728Class extends Cms\Classes\PageCode
{




//


//
//
public function onStart()
{

    /*$options = array(
    '--dpi 300',
    'no-outline',
    '--image-quality 10',);

    $image = new Image('http://bl.ocks.org/mbostock/raw/7555321/', $options);
    $image->saveAs('output.png');*/

    $today = date("Ymd_His");

    $html = '

    <!doctype html>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <link rel="stylesheet"  href="http://localhost/bundles/mybundle/css/pdf.css" />
            <style>
                /* тут стили, которые сработают на генерации изображения */
            </style>
        </head>
        <body>
            <h1>Это тестовый контейнер на русском языке</h1>
        </body>
    </html>

    ';

    $html = '<h1>sdfsdfsdf</h1>';

    /* PDF */
    /*
    $pdf = App::make('snappy.pdf.wrapper');
    $pdf->loadHTML($html)->setPaper('a4')->setOrientation('landscape')->setOption('margin-bottom', 0);
    return $pdf->download('invoice.pdf');*/

    /* IMAGE */
    // quality 100

    /*
    SnappyImage::loadHTML($html)
    ->setOption('width', 1240)
    ->setOption('height', 876)
    ->save($today.'.jpg');
    */

}
public function onDownload() {

    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
        $protocol = 'https://';
    } else {
        $protocol = 'http://';
    }

    $data = post();

    $today = date("Ymd_His");
    
    if(!isset($data['src'])){
        $img = "<img src='".$data['src']."'>";
    } else {
        $img = "<img src='https://fakeimg.pl/374x452/'>";
    }
    
    $editor = $data['editor'];
    $footer = $data['footer'];
    
    return $data;
    
    
    $html = '
        <!doctype html>
        <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <style>
             
            
                #release .uk-container {
                    width: 1220px;
                    min-width: 1220px;
                    padding: 0;
                }
                #release .uk-section.uk-section-default {
                    height: 1000px; 
                    padding-top: 16px;
                }
                #release .uk-container > .uk-grid {
                    margin: 0;
                }
                #release .uk-container .uk-first-column {
                    padding: 0;
                }
            
                
                
                #creator-form {
                    height:800px;
                    width: 1220px;
                    margin: auto;
                }
                .level_1 {
                    position: relative;
                    height: 800px;
                    width: 1220px;
                    background: #e21e22;
                }
                .level_2 {
                    border: 20px solid #e21e22;
                    height: 722px;
                    padding: 15px;
                    width: 1150px;
                    background: #fff;
                    border-top: 45px solid #e21e22;
                    border-bottom: 45px solid #e21e22;
                }
                
                .content {
                    width: 100%;
                    height: 100%;
                }
                .info {
                    width: 100%;
                    height: inherit;
                }
                #upload__img {
                    position: absolute;
                    top: 0;
                    left: 0;
                    overflow: hidden;
                }
                
                .info .img {
                    width: 380px;
                    height: inherit;
                    float: left;
                    margin: 0;
                    padding: 0;
                    overflow: hidden;
                    position: relative;
                }
                .info .text {
                    padding: 0;
                    float: right;
                    width: 735px;
                    margin: 0;
                    position: relative;
                    height: 100%;
                }
                .img_wrapper {
                    position: relative;
                    border: 3px solid #e21e22;
                    height: 451px;
                    overflow: hidden;        
                }
                
            
                .editor {
                    position: relative;
                    text-align: left;
                    max-height: 605px;
                    overflow: overlay;
                }
                
                #creator-form .ce-header {
                    color: #000;
                }
                
                #upload_img {
                    height: 100%;
                    
                    display: -ms-flexbox;
                    display: -webkit-flex;
                    display: flex;
                    -webkit-flex-direction: column;
                    -ms-flex-direction: column;
                    flex-direction: column;
                    -webkit-flex-wrap: nowrap;
                    -ms-flex-wrap: nowrap;
                    flex-wrap: nowrap;
                    -webkit-justify-content: center;
                    -ms-flex-pack: center;
                    justify-content: center;
                    -webkit-align-content: stretch;
                    -ms-flex-line-pack: stretch;
                    align-content: stretch;
                    -webkit-align-items: center;
                    -ms-flex-align: center;
                    align-items: center;
                }
                
                .wrapp__info {
                    color: grey;
                    transition: 200ms color;
                    text-align: center;
                    margin: 0 0 10px;
                }
                .wrapp__info .size {
                    font-weight: 600;
                    color: #111;
                }
                .wrapp__info div {
                    margin: 0;
                    line-height: normal;
                }
                .upload_img_container .form-group {padding: 0;margin: 0 0 15px;}
                .upload_img_container input[type=file] {outline:0;opacity:0;pointer-events:none;user-select:none}
                .upload_img_container .label {width:140px;border:2px dashed grey;border-radius:5px;display:block;padding:1.2em;transition:border 300ms ease;cursor:pointer;text-align:center}
                .upload_img_container .label i {display:block;font-size:42px;padding-bottom:16px}
                .upload_img_container .label i, .upload_img_container .label .title {color:grey;transition:200ms color}
                .upload_img_container .label:hover {border:2px solid #000;background: moccasin;}
                .upload_img_container .label:hover i, .upload_img_container .label:hover .title {color:#000}
                
                .submit__wrapper button {
                    color: #555;
                    line-height: normal;
                    width: 183px;
                    margin: auto;
                    border: 2px solid #555;
                    padding: 10px 0;
                    background: transparent;
                }
                .submit__wrapper button:hover {
                    cursor: pointer;
                    background: moccasin;
                }
                
                .input__file {
                    opacity: 0;
                    visibility: hidden;
                    position: absolute;
                }
                
                #remove_image {
                    width: 100%;
                    position: absolute;
                    top: 0;
                    left: 0;
                    height: 100%;
                    
                    display: -ms-flexbox;
                    display: -webkit-flex;
                    display: none;
                    -webkit-flex-direction: column;
                    -ms-flex-direction: column;
                    flex-direction: column;
                    -webkit-flex-wrap: nowrap;
                    -ms-flex-wrap: nowrap;
                    flex-wrap: nowrap;
                    -webkit-justify-content: flex-end;
                    -ms-flex-pack: end;
                    justify-content: flex-end;
                    -webkit-align-content: stretch;
                    -ms-flex-line-pack: stretch;
                    align-content: stretch;
                    -webkit-align-items: center;
                    -ms-flex-align: center;
                    align-items: center;
                }
                #remove_image button {
                    display: none;
                    color: #555;
                    line-height: normal;
                    width: 183px;
                    margin: auto;
                    border: 2px solid #555;
                    padding: 10px 0;
                    background: #fff;
                }
                #remove_image:hover button {
                    display: block;
                }
                #remove_image button:hover {
                    cursor: pointer;
                    background: moccasin;
                }
                
                /* Editor.js */
                #creator-form .ce-header {
                    font-weight: 700;
                }
                .text .codex-editor__redactor {
                    padding: 0 !important;
                }
                .text .ce-block__content {
                    max-width: 100%;
                }
                #creator-form h1.ce-header {
                    /*padding: 0;
                    line-height: 60px;
                    margin: 0 0 10px;
                    font-size: 70px;
                    text-transform: uppercase;
                    text-indent: -3px;*/
                    padding: 0;
                    line-height: 60px;
                    margin: 0;
                    font-size: 60px;
                    text-transform: uppercase;
                    text-indent: -3px;
                }
                #creator-form h2.ce-header {
                    padding: 0;
                    line-height: 30px;
                    margin: 0 0 20px;
                    font-size: 24px;
                    text-transform: uppercase;
                }
                #creator-form .ce-paragraph {
                    font-size: 22px;
                    padding: 0;
                    line-height: 1.3em;
                    margin: 0 0 5px;
                }
                
                .text .footer {
                    border-top: 4px solid #e21e22;
                    position: absolute;
                    bottom: 0;
                    width: 100%;
                    background: #fff;
                    z-index: 9;
                    padding-top: 10px;
                    color: #000;
                }
                #creator-form .footer .codex-editor__redactor {
                    width: 100%
                }
                #creator-form .footer .ce-header {
                    text-align: center;
                    margin: 0;
                    padding: 0;
                }
                #creator-form .footer h1.ce-header {
                    font-size: 44px;
                    text-transform: initial;
                }
                #creator-form .footer h2.ce-header {
                    line-height: 30px;
                    font-size: 26px;
                    text-transform: uppercase;
                }
                #creator-form .footer .ce-paragraph {
                    padding: 0;
                    line-height: normal;
                    font-size: 20px;
                    text-align: center;
                }
                
            
                /* clearfix */
                .clearfix:before, .clearfix:after {
                    content: " ";
                    display: table;
                }
                .clearfix:after {
                    clear: both;
                }
                .clearfix {
                    *zoom: 1;
                    clear: both;
                }
                .header {
                    padding: 15px 0;
            
                    display: -ms-flexbox;
                    display: -webkit-flex;
                    display: flex;
                    -webkit-flex-direction: row;
                    -ms-flex-direction: row;
                    flex-direction: row;
                    -webkit-flex-wrap: nowrap;
                    -ms-flex-wrap: nowrap;
                    flex-wrap: nowrap;
                    -webkit-justify-content: flex-end;
                    -ms-flex-pack: end;
                    justify-content: flex-end;
                    -webkit-align-content: stretch;
                    -ms-flex-line-pack: stretch;
                    align-content: stretch;
                    -webkit-align-items: center;
                    -ms-flex-align: center;
                    align-items: center;
                }
                .header .download {
                    display: -ms-flexbox;
                    display: -webkit-flex;
                    display: flex;
                    -webkit-flex-direction: row;
                    -ms-flex-direction: row;
                    flex-direction: row;
                    -webkit-flex-wrap: nowrap;
                    -ms-flex-wrap: nowrap;
                    flex-wrap: nowrap;
                    -webkit-justify-content: flex-end;
                    -ms-flex-pack: end;
                    justify-content: flex-end;
                    -webkit-align-content: stretch;
                    -ms-flex-line-pack: stretch;
                    align-content: stretch;
                    -webkit-align-items: center;
                    -ms-flex-align: center;
                    align-items: center;
                }
                .header .download span {
                    margin: 0 10px 0 0;
                    font-size: 20px;
                }
                .header .download button {
                    background-color: #8c3a4d;
                    color: #fff;
                    padding: 10px 15px;
                    display: block;
                    font-size: 20px;
                    text-transform: uppercase;
                    transition: 0.1s ease-in-out;
                    transition-property: color, background-color;
                    text-decoration: none;
                    cursor: pointer;
                    border: none;
                }
                #creator-form div.footer > div:nth-child(2) {
                    width: 100% !important;
                    margin: 0 !important;
                }
                
                .notification {
                    font-size: 60px;
                    text-align: center;
                    text-transform: uppercase;
                    font-weight: 700;
                    line-height: 70px;
                }
                .notification .item_1 {
                    margin: 0 0 20px;
                }
                .notification .item_2 {
                    font-size: 99px;
                    text-indent: -4px;
                    margin: 0 0 10px;
                }
                .notification .item_3 {}
                
                .editor-top, 
                .editor-bottom {
                    position: absolute;
                    width: 100%;
                }
                .editor-top {
                    top: 11px;
                }
                .editor-bottom {
                    bottom: -32px;
                }
                .editor-top div,
                .editor-bottom div {
                    text-align: center;
                    font-size: 26px;
                    color: #fff;
                    text-transform: uppercase;
                }
                
            </style>

        </head>
        <body>
            <div id="creator-form">
                <div class="level_1">
                    <div class="editor-top" >
                        <div>'.$data["top"].'</div>
                    </div>
                    <div class="level_2">
                        <div class="content">
                            <div class="info">
                                <div class="img">
                                    <div class="img_wrapper">
                                        <div id="upload__img">
                                            <img src="'.$data["src"].'">
                                        </div>
                                    </div>
                                    <div class="notification">
                                        <div class="item_1">
                                            помогите
                                        </div>
                                        <div class="item_2">
                                            найти
                                        </div>
                                        <div class="item_3">
                                            человека
                                        </div>
                                    </div>
                                </div>
                                <div class="text">
                                    <div class="editor">
                                        '.$data['editor'].'
                                    </div>
                                    <div class="footer">
                                        '.$data['footer'].'
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="editor-bottom" >
                        <div>'.$data["bottom"].'</div>
                    </div>
                </div>
            </div>
        </body>
        </html>
    ';

    // так и не понял, почему оптимальна ширина 1215!
    //SnappyImage::loadHTML($html)->setOption('width', 1215)->setOption('height', 856)->save($_SERVER['DOCUMENT_ROOT']. '/storage/app/media/'.$today.'.jpg');
    
    SnappyImage::loadHTML($html)->save($_SERVER['DOCUMENT_ROOT']. '/storage/app/media/'.$today.'.jpg');
    
    //orienting_history
    
    $id_image = random_int(1, 9999999);
    Db::insert('insert into orienting_history (id_image, src) values (?, ?)', [$id_image, $protocol . $_SERVER['HTTP_HOST'].'/storage/app/media/'.$today.'.jpg']);

    return [
        'response' => array(
                'id_image' => $id_image,
                'src' => $protocol . $_SERVER['HTTP_HOST'].'/storage/app/media/'.$today.'.jpg',
                
            ),
        'data' => $protocol . $_SERVER['HTTP_HOST'].'/storage/app/media/'.$today.'.jpg'
    ];

}
public function onSubmit()
{
    $validator = Validator::make(
        $form = Input::all(), [
            'image' => 'required|image',
            //'size' => 'required|integer|min:0|max:500',
        ]
    );
 
    if ($validator->fails()) {
        throw new ValidationException($validator);
    }

    $file = (new File())->fromPost($form['image']);
    
    // 386 * 464
    // $form['size']
    $this['path_img'] = $file->getThumb(386, 464);

    return [
        '#object' => '<pre>'.json_encode($file).'</pre>',
        //'#dir' => '<pre>'.$this['dir'].'</pre>',
        '#img-wrapp' => '<div id="img" style="background: url('.$file->getThumb($form['size'], $form['size']).'); width: 180px; height: 180px;"></div>',
        'src' => '"'.$file->getThumb($form['size'], $form['size']).'"',
        '#upload__img' => '<img src="'.$file->getThumb($form['size'], $form['size']).'" />'
    ];
}
public function onDelete(){
    
    $data = post();
    
    $path_img = $data['path_img'];
    $server_document_root = $_SERVER['DOCUMENT_ROOT'];
    
    preg_match_all('/public\/((.*)\/*)\/(.*)\.(jpg|png|jpeg)/', $path_img, $matches, PREG_PATTERN_ORDER);
    
    $path_dir = $server_document_root . '/storage/app/uploads/public/' . $matches[1][0] . '/';
    
    $value1 = Input::get('value1');
    
    $pattern = '/(http|https):\/\/(.*?)\//i';
    $value1 = preg_replace($pattern, '', $value1);
    
    $pattern = '/((http|https):\/\/(.*?)\/)(.*)public\/(\d*)\/(.*)/i';
    //preg_match_all($pattern, $value1, $matches);
    
    //$path = '/home/l/lutsyi1l/skynd.ru/public_html/storage/app/uploads/public/603/';
    
    $this::removeDirectory($path_dir);
    
       
    return [
        //'path_dir' => $path_dir,
        //'path_dir' => $path_dir,
        //'totalProjects' => $matches[5], // директория
        //'path' => $str,
        'path_img' => $path_img,
        'server_document_root' => $server_document_root, // /home/l/lutsyi1l/contentim.ru/public_html
    ];
}
public function removeDirectory($path){
     // если путь существует и это папка
    if ( file_exists( $path ) AND is_dir( $path ) ) {
        // открываем папку
        $dir = opendir($path);
        while ( false !== ( $element = readdir( $dir ) ) ) {
          // удаляем только содержимое папки
          if ( $element != '.' AND $element != '..' )  {
            $tmp = $path . '/' . $element;
            chmod( $tmp, 0777 );
           // если элемент является папкой, то
           // удаляем его используя нашу функцию RDir
            if ( is_dir( $tmp ) ) {
             $this::removeDirectory( $tmp );
           // если элемент является файлом, то удаляем файл
            } else {
              unlink( $tmp );
           }
         }
        }
        // закрываем папку
        closedir($dir);
        // удаляем саму папку
        if ( file_exists( $path ) ) {
         rmdir( $path );
        }
    }
}
}
