<?php
namespace Siaoynli\Baidu\BaiduSdk;

use Siaoynli\Baidu\BaiduSdk\Lib\AipBase;

/**
 * 黄反识别
 */
class AipImageCensor extends AipBase{

    /**
     * @var string
     */
    private $imageCensorUserDefinedUrl = 'https://aip.baidubce.com/rest/2.0/solution/v1/img_censor/v2/user_defined';

    /**
     * @var string
     */
    private $textCensorUserDefinedUrl = 'https://aip.baidubce.com/rest/2.0/solution/v1/text_censor/v2/user_defined';

    /**
     * @var string
     */
    private $voiceCensorUserDefinedUrl = 'https://aip.baidubce.com/rest/2.0/solution/v1/voice_censor/v2/user_defined';

    /**
     * @var string
     */
    private $videoCensorUserDefinedUrl = 'https://aip.baidubce.com/rest/2.0/solution/v1/video_censor/v2/user_defined';

    /**
     * @param  string $image 图像
     * @return array
     */
    public function imageCensorUserDefined($image){

        $data = array();

        $isUrl = substr(trim($image), 0, 4) === 'http';
        if(!$isUrl){
            $data['image'] = base64_encode($image);
        }else{
            $data['imgUrl'] = $image;
        }

        return $this->request($this->imageCensorUserDefinedUrl, $data);
    }

    /**
     * @param  string $text
     * @return array
     */
    public function textCensorUserDefined($text){

        $data = array();

        $data['text'] = $text;

        return $this->request($this->textCensorUserDefinedUrl, $data);
    }

    /**
     * @param  string $voice
     * @param  string $fmt
     * @return array
     */
    public function voiceCensorUserDefined($voice, $fmt, $options = array()){

        $data = array();

	    $isUrl = substr(trim($voice), 0, 4) === 'http';
        if(!$isUrl){
            $data['base64'] = base64_encode($voice);
        }else{
            $data['url'] = $voice;
        }
        $data['fmt'] = $fmt;
        $data = array_merge($data, $options);
        return $this->request($this->voiceCensorUserDefinedUrl, $data);
    }

    /**
     * @param  string $name
     * @param  string $videoUrl
     * @param  string $extId
     * @return array
     */
    public function videoCensorUserDefined($name, $videoUrl, $extId, $options = array()){

        $data = array();

        $data['name'] = $name;
        $data['videoUrl'] = $videoUrl;
        $data['extId'] = $extId;
        $data =  array_merge($data, $options);
        return $this->request($this->videoCensorUserDefinedUrl, $data);
    }
}
