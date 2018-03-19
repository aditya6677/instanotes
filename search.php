
<?php
require 'connect.inc.php';
include 'search.inc.php';
?>
<html>
<body>
<div class="container"><br><br>
  <table class="table">
    <thead>
      <tr>
        <th style = "color:#FFFFFF">Subject</th>
        <th style = "color:#FFFFFF">Topic</th>
        <th style = "color:#FFFFFF">Faculty</th>
        <th style = "color:#FFFFFF">Download</th>
      </tr>
    </thead>
    <tbody>

<?php
if(isset($_POST['typeahead']))
{
    $search=$_POST['typeahead'];

    if(!empty($search))
    {
    //   echo $subject;

       $query="SELECT `link` ,`unit`,`faculty`,`subject`,`name` FROM `notes` WHERE `subject`='".mysql_real_escape_string($search)."' OR `faculty`='".mysql_real_escape_string($search)."'";
        $query_run=mysql_query($query);

        if($query_run)
        {
          $my_row_num=mysql_num_rows($query_run);

             if($my_row_num==0)
             {
                 ?>
               <div align='center' style="color:#FFFFFF">
                       <p>"Oops !! we could not find what you were looking for but we have marked it down, and will make it available as early as possible"</p>
               </div>
               <?php
             }
             else {

                while($query_row=mysql_fetch_assoc($query_run))
                {
                      $faculty=$query_row['faculty'];
                      $subject=$query_row['subject'];
                      $topic=$query_row['name'];
                      $link=$query_row['link'];
                      $unit=$query_row['unit'];
                     //$unit='unit'.$unit;
                    //  $un=strtoupper($unit);
                      ?>
                          <tr>
                          <td style = "color:#FFFFFF; font-size:small">
                      <?php
                        echo strtoupper("$subject");
                        echo "</td>";
                      ?>
                      <td style = "color:#FFFFFF; font-size:small">
                      <?php
                        echo strtoupper("$topic");
                        echo "</td>";
                     ?>
                      <td style = "color:#FFFFFF; font-size:small">
                      <?php
                      echo strtoupper("$faculty");
                      echo "</td>";

                      echo "<td>";
                      echo "<a href=".$link.">Download</a>";
                      echo "</td>";
                      echo "</tr>";

                }

             }

        }
        else {

          echo mysql_error();
        }

    }
    else {
        ?>            <div align = "center">
                          <span style="color:#FFFFFF">NOT A VALID INPUT</span>
                          </div>
      <?php
    }

}
else {
        ?>            <div align = "center">
                          <span style="color:#FFFFFF">NOT A VALID INPUT</span>
                          </div>
      <?php
}


 ?>
                </tbody>
             </table>
         </div>
    </body>
  </html>
