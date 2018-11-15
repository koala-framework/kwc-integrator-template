<?php
class KwcIntegratorTemplate_Kwc_Advanced_IntegratorTemplateLegacy_Component extends Kwc_Abstract
{
    public static function getSettings($param = null)
    {
        $ret = parent::getSettings($param);
        $ret['componentName'] = trlKwfStatic('Integrator Template');
        $ret['dataClass'] = 'KwcIntegratorTemplate_Kwc_Advanced_IntegratorTemplateLegacy_Data';
        $ret['ownModel'] = 'Kwf_Component_FieldModel';
        $ret['generators']['embed'] = array(
            'class' => 'Kwf_Component_Generator_Page_Static',
            'component' => 'KwcIntegratorTemplate_Kwc_Advanced_IntegratorTemplateLegacy_Embed_Component',
            'name' => '',
            'filename' => 'embed'
        );
        $ret['extConfig'] = 'Kwf_Component_Abstract_ExtConfig_Form';
        $ret['flags']['noIndex'] = true;
        $ret['editComponents'] = array('embed');
        return $ret;
    }
}
