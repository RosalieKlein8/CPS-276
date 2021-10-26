<?php

class creatingDirectories {
    public function submit(){
        if (isset($_POST["submitBtn"])){
            $folder = $_POST["folderName"];
            if (!glob("directories/{$folder}")){ 
                return $this->createDirectories();
            }               
            else if (glob("directories/{$folder}")){
                return $this->alreadyExists();
            }
        }
    }
    public function createDirectories(){ 
        $folder = $_POST["folderName"]; 
        $fileContents = $_POST["fileContents"];
        $success = mkdir ("directories/{$folder}"); 
        if ($success){
            chmod ("directories/{$folder}", 0777);
            file_put_contents("directories/{$folder}/readme.txt", $fileContents);
            $string = <<<HTML
            <p>File and directory were created.<br><a href = 'directories/{$folder}/readme.txt'>Path where file is located.</a></p>
            HTML;
            return $string;
        }
        else {
            $string = <<<HTML
            <p>There was an error creating this directory. Please try again.</p>
            HTML;
            return $string;
        }
    }
    public function alreadyExists(){ 
        $string = <<<HTML
        <p>A directory already exists with that name.</p>
        HTML;
        return $string;
    }    
}

?>
