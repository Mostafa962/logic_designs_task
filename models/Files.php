<?php
class Files extends Database
{
	public $id;
    public $file_name;
    public $tableName = 'files';
    //names of table fields
    public $dbfields = array(
            'file_name',);
    public static function ShowFiles ($sql) {
        $allfiles = self::read($sql,PDO::FETCH_CLASS, __CLASS__);
        $table = '<table  class = "table table-responsive table-bordered table-hover table-center"  ><tr>
                     </tr>';
        if ($allfiles != false) {
            if (is_object($allfiles)) {
                $fileName = $allfiles->file_name;
                $ext = pathinfo($fileName, PATHINFO_EXTENSION);
                if (in_array(strtoupper($ext),['JPEG','JFIF','Exif','TIFF','GIF','BMP','PNG','JPG','PPM','PGM','PBM','PNM','PPM'])) {
                    $table .= '<tr>
                    <td width="10%" height="100px"><img src="uploads/'.$fileName.'" width="100%" height="100%"></td>
                    <td width="10%"><a id="download" href="uploads/'.$fileName.'" class="btn btn-default">See image</i></a></td>
                   </tr>';
                }else{
                    $table .= '<tr>
                    <td width="10%"><a id="download" href="uploads/'.$fileName.'"><button class="btn btn-default btn-block">
                            <i class="fa fa-download"></i>Download
                        </button></i></a>The '.$fileName.'</td>
                   </tr>';
                }
            }
        } else {
            $table .= '<tr><td colspan="6">No files found</td></tr>';
        }
        $table .= '</table>';
        return $table;
    }
}