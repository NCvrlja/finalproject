<?php

namespace Container5EoBdI2;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVichUploader_Listener_Upload_MealsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'vich_uploader.listener.upload.meals' shared service.
     *
     * @return \Vich\UploaderBundle\EventListener\Doctrine\UploadListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'vich'.\DIRECTORY_SEPARATOR.'uploader-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'BaseListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'vich'.\DIRECTORY_SEPARATOR.'uploader-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'UploadListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'vich'.\DIRECTORY_SEPARATOR.'uploader-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Adapter'.\DIRECTORY_SEPARATOR.'AdapterInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'vich'.\DIRECTORY_SEPARATOR.'uploader-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Adapter'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'DoctrineORMAdapter.php';

        return $container->privates['vich_uploader.listener.upload.meals'] = new \Vich\UploaderBundle\EventListener\Doctrine\UploadListener('meals', ($container->privates['vich_uploader.adapter.orm'] ??= new \Vich\UploaderBundle\Adapter\ORM\DoctrineORMAdapter()), ($container->privates['vich_uploader.metadata_reader'] ?? self::getVichUploader_MetadataReaderService($container)), ($container->services['vich_uploader.upload_handler'] ?? $container->load('getVichUploader_UploadHandlerService')));
    }
}