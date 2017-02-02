<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_8fc1e4352312bd850b230056cf35200c1db9749fefbc53d3d93ac51a4b0692eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f6f4cdb5c777c679c01f08747416091962256edefb0902b185b46834ef4e76d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f6f4cdb5c777c679c01f08747416091962256edefb0902b185b46834ef4e76d->enter($__internal_7f6f4cdb5c777c679c01f08747416091962256edefb0902b185b46834ef4e76d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_a12ebdafa2b55f058d97b30f588ca53d34bfcb7222848578f9f3108a65680d63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a12ebdafa2b55f058d97b30f588ca53d34bfcb7222848578f9f3108a65680d63->enter($__internal_a12ebdafa2b55f058d97b30f588ca53d34bfcb7222848578f9f3108a65680d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7f6f4cdb5c777c679c01f08747416091962256edefb0902b185b46834ef4e76d->leave($__internal_7f6f4cdb5c777c679c01f08747416091962256edefb0902b185b46834ef4e76d_prof);

        
        $__internal_a12ebdafa2b55f058d97b30f588ca53d34bfcb7222848578f9f3108a65680d63->leave($__internal_a12ebdafa2b55f058d97b30f588ca53d34bfcb7222848578f9f3108a65680d63_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d88c5808da141a39cbc77c6dce230e94b933453556037858369a780b032ffc69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d88c5808da141a39cbc77c6dce230e94b933453556037858369a780b032ffc69->enter($__internal_d88c5808da141a39cbc77c6dce230e94b933453556037858369a780b032ffc69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a9b533f5dbda5b0b8753290ebfaf72c7b5250a97218fcd0852546f0c4f650171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9b533f5dbda5b0b8753290ebfaf72c7b5250a97218fcd0852546f0c4f650171->enter($__internal_a9b533f5dbda5b0b8753290ebfaf72c7b5250a97218fcd0852546f0c4f650171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a9b533f5dbda5b0b8753290ebfaf72c7b5250a97218fcd0852546f0c4f650171->leave($__internal_a9b533f5dbda5b0b8753290ebfaf72c7b5250a97218fcd0852546f0c4f650171_prof);

        
        $__internal_d88c5808da141a39cbc77c6dce230e94b933453556037858369a780b032ffc69->leave($__internal_d88c5808da141a39cbc77c6dce230e94b933453556037858369a780b032ffc69_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
