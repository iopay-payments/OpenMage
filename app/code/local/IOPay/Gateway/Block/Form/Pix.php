<?php

/**
 *
 * @category   IoPay
 * @package    IoPay_Gateway
 * @author     Proj3ct
 * @copyright 2022 Proj3ct
 */

class IOPay_Gateway_Block_Form_Pix extends Mage_Payment_Block_Form
{
    /**
     * Constructor method
     */
    protected function _construct()
    {
        $title      = $this->getMethodTitle();
        $label = '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 115.56 115.65" style="enable-background:new 0 0 115.56 115.65; width: 20px; margin-bottom: -4px" xml:space="preserve">
                                        <style type="text/css">
                                            .st3{fill:#00BCAD;}
                                        </style>
                                    <path class="st3" d="M23.81,82.13c-1.31,0.08-2.91-0.14-4.51,0.11c-0.33,0.05-0.44-0.19-0.61-0.35c-3.8-3.79-7.59-7.6-11.4-11.38
                                        c-1.59-1.57-3.09-3.2-4.17-5.18c-3.52-6.45-2.36-14.82,2.82-20.03c4.23-4.25,8.48-8.48,12.71-12.72c0.29-0.29,0.54-0.41,0.97-0.33
                                        c0.48,0.1,0.99,0.06,1.49,0.06c2.21,0.01,4.41-0.02,6.62,0.04c3.08,0.09,5.66,1.34,7.83,3.5c5.52,5.52,11.04,11.04,16.56,16.56
                                        c3.43,3.43,8.35,3.45,11.8,0.03c3.04-3.02,6.07-6.06,9.1-9.09c2.52-2.52,5.03-5.04,7.55-7.55c2.28-2.27,5.05-3.39,8.25-3.43
                                        c1.89-0.03,3.8,0.12,5.68-0.05c1.03-0.09,1.57,0.33,2.2,0.95c4.13,4.17,8.38,8.23,12.41,12.49c6.12,6.47,5.89,17.04-0.38,23.36
                                        c-4.22,4.26-8.48,8.48-12.71,12.73c-0.27,0.28-0.51,0.43-0.92,0.27c-0.22-0.09-0.49-0.03-0.74-0.04c-2.33-0.06-4.66,0.15-6.99-0.11
                                        c-2.59-0.29-4.83-1.37-6.67-3.21c-5.56-5.54-11.1-11.1-16.65-16.64c-2.81-2.81-6.81-3.39-10.13-1.51c-0.64,0.36-1.2,0.82-1.72,1.34
                                        c-5.52,5.52-11.05,11.03-16.55,16.56c-2.42,2.42-5.31,3.64-8.73,3.62C25.97,82.13,25.04,82.13,23.81,82.13z"/>
                                    <path class="st3" d="M90.75,27.48c-2.09-0.04-4.13-0.05-6.13,0.49c-2.86,0.77-5.35,2.17-7.44,4.25
                                        c-5.57,5.56-11.13,11.13-16.7,16.69c-1.55,1.55-3.37,1.55-4.93-0.01c-5.59-5.59-11.17-11.2-16.79-16.77
                                        c-3.16-3.13-7.01-4.68-11.46-4.74c-1.09-0.02-2.19,0-3.41,0c0.23-0.25,0.37-0.42,0.53-0.57c6.96-6.96,13.92-13.93,20.89-20.89
                                        c6.57-6.56,17.45-6.57,24.01-0.01c7.01,7,14.01,14.01,21.02,21.02C90.48,27.07,90.68,27.18,90.75,27.48z"/>
                                    <path class="st3" d="M90.87,87.19c-0.19,0.12-0.42,0.21-0.58,0.37c-6.98,6.97-13.96,13.95-20.93,20.92
                                        c-6.6,6.59-17.47,6.61-24.05,0.03c-6.95-6.94-13.89-13.89-20.84-20.84c-0.16-0.16-0.35-0.29-0.56-0.46
                                        c0.28-0.24,0.51-0.16,0.72-0.16c2.18-0.01,4.37,0.08,6.51-0.47c2.91-0.74,5.46-2.11,7.58-4.23c5.59-5.57,11.16-11.15,16.74-16.73
                                        c1.66-1.66,3.47-1.66,5.13-0.01c5.37,5.37,10.76,10.73,16.11,16.12c3.49,3.52,7.65,5.36,12.63,5.22c0.46-0.01,0.91,0,1.37,0
                                        C90.76,87.04,90.81,87.12,90.87,87.19z"/>
                                    </svg>';
        parent::_construct();
        $this->setTemplate('iopay/gateway/form/pix.phtml')
            ->setMethodTitle($title)
            ->setMethodLabelAfterHtml($label);
    }
}