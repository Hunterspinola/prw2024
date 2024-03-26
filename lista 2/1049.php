<?php

     function vertebrado($a1, $a2){
    if($a1 == "ave"){
        if($a2 == "carnivoro"){
            echo "aguia\n";
        }
        else{
            echo "pomba\n";
        }
    }
            else{
                if($a2 == "onivoro"){
                    echo "homem\n";
                }
                else{
                    echo "vaca\n";
                }
            }
    }
    
    function invertebrado($a1, $a2){
        if($a1 == "inseto"){
            if($a2 == "hematofago"){
                echo "pulga\n";
            }
            else{
                echo "lagarta\n";
            }
        }
                else{
                    if($a2 == "hematofago"){
                        echo "sanguessuga\n";
                    }
                    else{
                        echo "minhoca\n";
                }
        }
    }
    
    $a = readline();
    $a1 = readline();
    $a2 = readline();
    
    if($a == "vertebrado"){
        vertebrado($a1,$a2);
    }
    else{
        invertebrado($a1,$a2);
    }

?>