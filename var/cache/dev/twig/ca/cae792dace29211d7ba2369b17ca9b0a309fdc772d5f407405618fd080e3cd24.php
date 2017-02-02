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
        $__internal_b2975dd4be9c434e014c65d14b8d08c6ae0222de041f477bcb1c662ff720946c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2975dd4be9c434e014c65d14b8d08c6ae0222de041f477bcb1c662ff720946c->enter($__internal_b2975dd4be9c434e014c65d14b8d08c6ae0222de041f477bcb1c662ff720946c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_c66468ec9f05fb5d39e8ec4422a535e1aa1c8f890f53094735be461345e915ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c66468ec9f05fb5d39e8ec4422a535e1aa1c8f890f53094735be461345e915ac->enter($__internal_c66468ec9f05fb5d39e8ec4422a535e1aa1c8f890f53094735be461345e915ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_b2975dd4be9c434e014c65d14b8d08c6ae0222de041f477bcb1c662ff720946c->leave($__internal_b2975dd4be9c434e014c65d14b8d08c6ae0222de041f477bcb1c662ff720946c_prof);

        
        $__internal_c66468ec9f05fb5d39e8ec4422a535e1aa1c8f890f53094735be461345e915ac->leave($__internal_c66468ec9f05fb5d39e8ec4422a535e1aa1c8f890f53094735be461345e915ac_prof);

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
