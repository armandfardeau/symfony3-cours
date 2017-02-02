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
        $__internal_3e945a08a3112e6856c4a58677dfc84ae34cc208eb5f88f2c363da29526314b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e945a08a3112e6856c4a58677dfc84ae34cc208eb5f88f2c363da29526314b0->enter($__internal_3e945a08a3112e6856c4a58677dfc84ae34cc208eb5f88f2c363da29526314b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_92c65d11200bd6bea8633b3ff18392fbc6066da49505b35da777a23768199870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92c65d11200bd6bea8633b3ff18392fbc6066da49505b35da777a23768199870->enter($__internal_92c65d11200bd6bea8633b3ff18392fbc6066da49505b35da777a23768199870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_3e945a08a3112e6856c4a58677dfc84ae34cc208eb5f88f2c363da29526314b0->leave($__internal_3e945a08a3112e6856c4a58677dfc84ae34cc208eb5f88f2c363da29526314b0_prof);

        
        $__internal_92c65d11200bd6bea8633b3ff18392fbc6066da49505b35da777a23768199870->leave($__internal_92c65d11200bd6bea8633b3ff18392fbc6066da49505b35da777a23768199870_prof);

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
