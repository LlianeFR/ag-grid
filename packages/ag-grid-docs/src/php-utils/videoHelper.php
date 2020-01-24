<?php
    function printVideo($url){
        echo "
            <section id='angular-demo' class='mb-3'>
                <div class='card'>
                    <div class='card-header'>Getting Started Video Tutorial</div>
                        <div class='card-body'>
                        <div class='video'>
                            <iframe src='$url' frameborder='0' allow='accelerometer; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </section>
        ";
    }
?>