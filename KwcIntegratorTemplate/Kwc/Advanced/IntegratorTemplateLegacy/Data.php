<?php
class KwcIntegratorTemplate_Kwc_Advanced_IntegratorTemplateLegacy_Data extends Kwf_Component_Data
{
    public function __get($var)
    {
        if ($var == 'url') {
            $url = $this->getComponent()->getRow()->url;
            return $url ? $url : '';
        } else {
            return parent::__get($var);
        }
    }

    public function getAbsoluteUrl()
    {
        return $this->url;
    }
}
