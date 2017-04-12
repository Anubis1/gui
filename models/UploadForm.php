<?
namespace app\models;
 
use yii\base\Model;
use yii\web\UploadedFile;
use Yii;
 global $filenames;
class UploadForm extends Model
{

    /**
     * @var UploadedFile[]
     */
    public $imageFiles;
	public $files_vse='';
  public $Mp4iles;
    public function rules()
    {
        return [
            [['imageFiles'], 'file', 'skipOnEmpty' => false, 'extensions' => 'mp3', 'maxFiles' => 3,'checkExtensionByMimeType'=>false],
        ];
    }
    
    public function upload()
    {
		
		$this->files_vse.='';
        if ($this->validate()) { 
            foreach ($this->imageFiles as $file) {
                $filename=Yii::$app->getSecurity()->generateRandomString(15);
                $file->saveAs('./music/' . $filename . '.' . $file->extension);
				$this->files_vse.=$filename.'|';
				
            }

			//exit($this->files_vse);
		return $this->files_vse;
        } else {
            return false;
        }
    }

}
?>