<?php

/* BunkerBundle:Default:index.html.twig */
class __TwigTemplate_3357210ec3cd9d8b40ac23e5b6daa33ec9b969edfa71ecf3082b5ee0a51af3b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_06d2a44698b392a6ec204f3b9d77338d859e20c018d6fcc951d50c23b1731e5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06d2a44698b392a6ec204f3b9d77338d859e20c018d6fcc951d50c23b1731e5c->enter($__internal_06d2a44698b392a6ec204f3b9d77338d859e20c018d6fcc951d50c23b1731e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BunkerBundle:Default:index.html.twig"));

        $__internal_cc354717bdd3445582cb1ddb8d60fa238ad5f2b5686db21e5758d2f32d1c1793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc354717bdd3445582cb1ddb8d60fa238ad5f2b5686db21e5758d2f32d1c1793->enter($__internal_cc354717bdd3445582cb1ddb8d60fa238ad5f2b5686db21e5758d2f32d1c1793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BunkerBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"/css/bootstrap-3.3.7-dist/css/bootstrap.css\"
</head>
<body>
    ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "</body>
</html>";
        
        $__internal_06d2a44698b392a6ec204f3b9d77338d859e20c018d6fcc951d50c23b1731e5c->leave($__internal_06d2a44698b392a6ec204f3b9d77338d859e20c018d6fcc951d50c23b1731e5c_prof);

        
        $__internal_cc354717bdd3445582cb1ddb8d60fa238ad5f2b5686db21e5758d2f32d1c1793->leave($__internal_cc354717bdd3445582cb1ddb8d60fa238ad5f2b5686db21e5758d2f32d1c1793_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b1f54db2409ef5f1495eb580067b4106362fbea5e6e20b09057f85ee85ba3a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b1f54db2409ef5f1495eb580067b4106362fbea5e6e20b09057f85ee85ba3a9->enter($__internal_4b1f54db2409ef5f1495eb580067b4106362fbea5e6e20b09057f85ee85ba3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c887fb8c8e62eba647838f523adf227a0490dc66c8791b5d68205f1f5ca65be7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c887fb8c8e62eba647838f523adf227a0490dc66c8791b5d68205f1f5ca65be7->enter($__internal_c887fb8c8e62eba647838f523adf227a0490dc66c8791b5d68205f1f5ca65be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c887fb8c8e62eba647838f523adf227a0490dc66c8791b5d68205f1f5ca65be7->leave($__internal_c887fb8c8e62eba647838f523adf227a0490dc66c8791b5d68205f1f5ca65be7_prof);

        
        $__internal_4b1f54db2409ef5f1495eb580067b4106362fbea5e6e20b09057f85ee85ba3a9->leave($__internal_4b1f54db2409ef5f1495eb580067b4106362fbea5e6e20b09057f85ee85ba3a9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8d33145a44c4fa157b69b46240fcc92f913eae2ec9cf9b80ad7fb08e87b1fe73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d33145a44c4fa157b69b46240fcc92f913eae2ec9cf9b80ad7fb08e87b1fe73->enter($__internal_8d33145a44c4fa157b69b46240fcc92f913eae2ec9cf9b80ad7fb08e87b1fe73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_700b5b91c60d201fe3d097f53a3b21da136bf374315ac0d651a0569d6c0f4ce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_700b5b91c60d201fe3d097f53a3b21da136bf374315ac0d651a0569d6c0f4ce0->enter($__internal_700b5b91c60d201fe3d097f53a3b21da136bf374315ac0d651a0569d6c0f4ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_700b5b91c60d201fe3d097f53a3b21da136bf374315ac0d651a0569d6c0f4ce0->leave($__internal_700b5b91c60d201fe3d097f53a3b21da136bf374315ac0d651a0569d6c0f4ce0_prof);

        
        $__internal_8d33145a44c4fa157b69b46240fcc92f913eae2ec9cf9b80ad7fb08e87b1fe73->leave($__internal_8d33145a44c4fa157b69b46240fcc92f913eae2ec9cf9b80ad7fb08e87b1fe73_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8a315739b7ac55508d1185fef40bb97bffae0b28668a6abe5413bc719591731 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8a315739b7ac55508d1185fef40bb97bffae0b28668a6abe5413bc719591731->enter($__internal_e8a315739b7ac55508d1185fef40bb97bffae0b28668a6abe5413bc719591731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_118da6bf03bae182b31fd8166405dfd13dbd4184e941dbdfbef9d75b6d33796c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_118da6bf03bae182b31fd8166405dfd13dbd4184e941dbdfbef9d75b6d33796c->enter($__internal_118da6bf03bae182b31fd8166405dfd13dbd4184e941dbdfbef9d75b6d33796c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "        <h1>SUPRISE MOTHERFUCKER</h1>
    ";
        
        $__internal_118da6bf03bae182b31fd8166405dfd13dbd4184e941dbdfbef9d75b6d33796c->leave($__internal_118da6bf03bae182b31fd8166405dfd13dbd4184e941dbdfbef9d75b6d33796c_prof);

        
        $__internal_e8a315739b7ac55508d1185fef40bb97bffae0b28668a6abe5413bc719591731->leave($__internal_e8a315739b7ac55508d1185fef40bb97bffae0b28668a6abe5413bc719591731_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2b14ab4f6aa7c9da92968f19f5abbdea1d8663058c708087c908ca8a856f0d17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b14ab4f6aa7c9da92968f19f5abbdea1d8663058c708087c908ca8a856f0d17->enter($__internal_2b14ab4f6aa7c9da92968f19f5abbdea1d8663058c708087c908ca8a856f0d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f97ced1a5b13c0da168660200ca9f75cb3fbdf6f22f190e93852d441d1d2ad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f97ced1a5b13c0da168660200ca9f75cb3fbdf6f22f190e93852d441d1d2ad7->enter($__internal_6f97ced1a5b13c0da168660200ca9f75cb3fbdf6f22f190e93852d441d1d2ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f97ced1a5b13c0da168660200ca9f75cb3fbdf6f22f190e93852d441d1d2ad7->leave($__internal_6f97ced1a5b13c0da168660200ca9f75cb3fbdf6f22f190e93852d441d1d2ad7_prof);

        
        $__internal_2b14ab4f6aa7c9da92968f19f5abbdea1d8663058c708087c908ca8a856f0d17->leave($__internal_2b14ab4f6aa7c9da92968f19f5abbdea1d8663058c708087c908ca8a856f0d17_prof);

    }

    public function getTemplateName()
    {
        return "BunkerBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 14,  109 => 12,  100 => 11,  83 => 6,  65 => 5,  54 => 15,  51 => 14,  49 => 11,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    <link rel=\"stylesheet\" href=\"/css/bootstrap-3.3.7-dist/css/bootstrap.css\"
</head>
<body>
    {% block body %}
        <h1>SUPRISE MOTHERFUCKER</h1>
    {% endblock %}
    {% block javascripts %}{% endblock %}
</body>
</html>", "BunkerBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/src/BunkerBundle/Resources/views/Default/index.html.twig");
    }
}
