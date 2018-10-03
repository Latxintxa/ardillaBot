<?php
    /*--------------------------------------------------------------------------------------------//
    //                                                                                            //
    //                                           **Ardilla Bot^*                                  //
    //                          Bot generado por el usuario Latxintxa para uso privado            //
    //                                   USO RESERVADO PARA PERSONAL AUTORIZADO                   //
    //                                                                                            //
    //                                                                                            //
    //--------------------------------------------------------------------------------------------*/

        $botToken="611130569:AAHXF-CIFbBUCwVqgPr4bCNLscy41xgZtM8";
        $website="https://api.telegram.org/bot".$botToken;
        $updateArray=file_get_contents($website."getUpdates");

        $updateArray=json_decode($updateArray,TRUE);
        $orden=count($updateArray);
        print_r($orden);
       $chatId =   $updateArray["result"][1]["message"]["chat"]["id"];
       $chatType = $updateArray["result"][1]["message"]["chat"]["type"];
       $mensaje =  $updateArray["result"][1]["message"]["text"];

       switch ($mensaje){
            case '/ayuda':  
                sendmensaje($chatId,$mensaje,$website);
                    break;
            case 'rata':  
                sendmensaje($chatId,$mensaje,$website);
                    break;

        }


        function sendmensaje($chatId,$mensaje,$website)
        {
            $respuesta="hola buen hombre: ".$chatId;
            $url="https://api.telegram.org/bot499399739:AAHZ7MIo_XN6uO1t2G3Kqno_hEdNwZsMmAU/sendmessage?chat_id=52077021&text=holita";
            file_get_contents($url);

        }
?>