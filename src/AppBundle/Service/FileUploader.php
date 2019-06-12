<?php
namespace AppBundle\Service;

use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class FileUploader
{
    private $targetDirectory;

    public function __construct($targetDirectory)
    {
        $this->targetDirectory = $targetDirectory;
    }

    public function upload(UploadedFile $file)
    {
        
        $extension = $file->guessExtension();
        /* ici verification extension */
        $verifExtension = ['pdf','jpg','jpeg','png','gif'];
        
        if (!$extension){
            echo "fichier non reconnu";
        }
        else{
            $fileName = md5(uniqid()).'.'.$extension;
        
            try {
                $file->move($this->getTargetDirectory(), $fileName);
            } catch (FileExcepetion $e) {
                echo "pas d'upload";die();
        
            }
        }

        return $fileName;
    }

    public function getTargetDirectory()
    {
        return $this->targetDirectory;
    }
}