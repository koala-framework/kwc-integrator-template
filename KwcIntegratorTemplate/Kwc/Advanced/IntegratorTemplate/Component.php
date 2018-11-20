<?php
class KwcIntegratorTemplate_Kwc_Advanced_IntegratorTemplate_Component extends Kwc_Abstract
{
    public static function getSettings($param = null)
    {
        $ret = parent::getSettings($param = null);
        $ret['componentName'] = trlKwfStatic('Integrator Template');
        $ret['contentSender'] = 'KwcIntegratorTemplate_Kwc_Advanced_IntegratorTemplate_ContentSender';
        $ret['extConfig'] = 'Kwf_Component_Abstract_ExtConfig_Form';
        $ret['ownModel'] = 'Kwf_Component_FieldModel';
        $ret['flags']['noIndex'] = true;
        $ret['flags']['hasHeaderIncludeCode'] = true;
        $ret['flags']['hasFooterIncludeCode'] = true;
        $ret['removeParts'] = array();
        return $ret;
    }

    public function getTemplateVars(Kwf_Component_Renderer_Abstract $renderer)
    {
        $ret = parent::getTemplateVars($renderer);
        $ret['includeCode'] = $this->getIncludeCode('content');
        return $ret;
    }

    public function getIncludeCode($position)
    {
        $position = strtoupper($position);
        return "\n<!-- APP_INCLUDE_$position - START -->\n###APP_INCLUDE_$position###\n<!-- APP_INCLUDE_$position - END -->\n";
    }
}
