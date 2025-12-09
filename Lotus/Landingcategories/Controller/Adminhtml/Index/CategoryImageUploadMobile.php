<?php

namespace Lotus\Landingcategories\Controller\Adminhtml\Index;

use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Backend\App\Action;
use Magento\MediaStorage\Model\File\UploaderFactory;
use Magento\Framework\Filesystem;
use Magento\Framework\Controller\Result\JsonFactory;

class CategoryImageUploadMobile extends Action implements HttpPostActionInterface
{
    protected $uploaderFactory;
    protected $filesystem;
    protected $resultJsonFactory;

    public function __construct(
        Action\Context $context,
        UploaderFactory $uploaderFactory,
        Filesystem $filesystem,
        JsonFactory $resultJsonFactory
    ) {
        parent::__construct($context);
        $this->uploaderFactory = $uploaderFactory;
        $this->filesystem = $filesystem;
        $this->resultJsonFactory = $resultJsonFactory;
    }

    public function execute()
    {
        try {
            $uploader = $this->uploaderFactory->create(['fileId' => 'mobile_category_image']);
            $uploader->setAllowedExtensions(['jpg', 'jpeg', 'png']);
            $uploader->setAllowRenameFiles(true);

            $mediaDirectory = $this->filesystem->getDirectoryWrite(\Magento\Framework\App\Filesystem\DirectoryList::MEDIA);

            $result = $uploader->save($mediaDirectory->getAbsolutePath('landingcategories'));

            $result['url'] = $this->_url->getBaseUrl() . 'media/landingcategories/' . $result['file'];

            return $this->resultJsonFactory->create()->setData($result);

        } catch (\Exception $e) {
            return $this->resultJsonFactory->create()->setData([
                'error' => $e->getMessage(),
                'errorcode' => 400
            ]);
        }
    }
}
