<?php
class KwcIntegratorTemplate_Kwc_Advanced_IntegratorTemplateLegacy_Trl_Component extends Kwc_Chained_Trl_Component
{
    public static function getSettings($masterComponentClass = null)
    {
        $ret = parent::getSettings($masterComponentClass);
        $ret['dataClass'] = 'KwcIntegratorTemplate_Kwc_Advanced_IntegratorTemplateLegacy_Trl_Data';
        $ret['ownModel'] = 'Kwf_Component_FieldModel';
        $ret['extConfig'] = 'Kwf_Component_Abstract_ExtConfig_Form';
        return $ret;
    }
}
