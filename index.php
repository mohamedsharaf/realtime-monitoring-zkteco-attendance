<?php
include('simple_html_dom.php');

class Content{
    private $url;
    function getContent($url){
        return file_get_html($url);
    }
    function printContent($content){
        echo "<table border='1'>";
        foreach($content->find('table',1)->find('tr') as $row){
            echo "<tr>";
            foreach($row->find('td') as $td){
                echo "<td>".$td."</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}
$content = new Content();
$content->printContent($content->getContent("http://103.91.229.62/form/RTData"))

?>