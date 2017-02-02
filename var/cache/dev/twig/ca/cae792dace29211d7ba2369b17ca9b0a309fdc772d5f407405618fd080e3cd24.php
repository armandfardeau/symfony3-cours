<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_6f6453bd02a3b068e783bcca1fc701c612d2ef4892e1a97fa2089650fad69c3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_06a58691abd89fcdbb69f04a69fc11dc39f15af285c3a57810a5a078cd0f2bfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06a58691abd89fcdbb69f04a69fc11dc39f15af285c3a57810a5a078cd0f2bfc->enter($__internal_06a58691abd89fcdbb69f04a69fc11dc39f15af285c3a57810a5a078cd0f2bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_e540ca54895a9912c318ee1e205699c616d58c1b4e15aa12b0d178b78e0bfe01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e540ca54895a9912c318ee1e205699c616d58c1b4e15aa12b0d178b78e0bfe01->enter($__internal_e540ca54895a9912c318ee1e205699c616d58c1b4e15aa12b0d178b78e0bfe01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_06a58691abd89fcdbb69f04a69fc11dc39f15af285c3a57810a5a078cd0f2bfc->leave($__internal_06a58691abd89fcdbb69f04a69fc11dc39f15af285c3a57810a5a078cd0f2bfc_prof);

        
        $__internal_e540ca54895a9912c318ee1e205699c616d58c1b4e15aa12b0d178b78e0bfe01->leave($__internal_e540ca54895a9912c318ee1e205699c616d58c1b4e15aa12b0d178b78e0bfe01_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
