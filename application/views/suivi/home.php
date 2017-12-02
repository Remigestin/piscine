<div class="row">
    <div class="col-md-10 col-md-offset-1 text-center">
        <table class="table table-bordered" style="font-size: small">

            <tr style ="background-color: #ccccff">
                <th>numSuivi</th>
                <th>contacte</th>.
                <th>annule</th>
                <th>commentaire</th>
                
            </tr>
<?php
foreach ($suivi as $item) {
   
    echo <<<EOT
    <tr>
        <td>$item->numSuivi</td>
        <td>$item->contacte</td>
        <td>$item->annule</td>
        <td>$item->commentaire</td>
     </tr>
EOT;
}
?>
        </table>
    </div>
</div>