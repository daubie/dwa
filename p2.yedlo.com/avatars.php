<?php
                $dir = "images/avatars/1/";
                foreach (glob($dir . '/*') as $filename) {
                   echo "<div style='float:left;height:150px;width:150px;'><img src='" . $filename . "'></div>";
            }

