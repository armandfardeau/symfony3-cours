<?php

/* JustBundle:Default:index.html.twig */
class __TwigTemplate_fadbe05dc201ffcaa54ddeb86745197e1c90da85ddc7273873cad2ba40b04e3e extends Twig_Template
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
        $__internal_f5d3726dca9933f171e1a58ef4d252eb32efba7333ddfcc2f20be03ee7b9df26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5d3726dca9933f171e1a58ef4d252eb32efba7333ddfcc2f20be03ee7b9df26->enter($__internal_f5d3726dca9933f171e1a58ef4d252eb32efba7333ddfcc2f20be03ee7b9df26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JustBundle:Default:index.html.twig"));

        $__internal_dd77fa5168ca8b4a67e42e734652d1d84321de0d4d718d67b3c8dab7c9d45fc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd77fa5168ca8b4a67e42e734652d1d84321de0d4d718d67b3c8dab7c9d45fc2->enter($__internal_dd77fa5168ca8b4a67e42e734652d1d84321de0d4d718d67b3c8dab7c9d45fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JustBundle:Default:index.html.twig"));

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
</head>
<body>
    ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "</body>
</html>
";
        
        $__internal_f5d3726dca9933f171e1a58ef4d252eb32efba7333ddfcc2f20be03ee7b9df26->leave($__internal_f5d3726dca9933f171e1a58ef4d252eb32efba7333ddfcc2f20be03ee7b9df26_prof);

        
        $__internal_dd77fa5168ca8b4a67e42e734652d1d84321de0d4d718d67b3c8dab7c9d45fc2->leave($__internal_dd77fa5168ca8b4a67e42e734652d1d84321de0d4d718d67b3c8dab7c9d45fc2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fcfd11ea99983fbd68fac69d6891561c4b53d119d438815898b3f31d5d6b5b0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcfd11ea99983fbd68fac69d6891561c4b53d119d438815898b3f31d5d6b5b0c->enter($__internal_fcfd11ea99983fbd68fac69d6891561c4b53d119d438815898b3f31d5d6b5b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c2aff19ecc40c8d10cb8f7d0745bf81ad68c1ee126f959c267dfae1a7d7217c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2aff19ecc40c8d10cb8f7d0745bf81ad68c1ee126f959c267dfae1a7d7217c0->enter($__internal_c2aff19ecc40c8d10cb8f7d0745bf81ad68c1ee126f959c267dfae1a7d7217c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c2aff19ecc40c8d10cb8f7d0745bf81ad68c1ee126f959c267dfae1a7d7217c0->leave($__internal_c2aff19ecc40c8d10cb8f7d0745bf81ad68c1ee126f959c267dfae1a7d7217c0_prof);

        
        $__internal_fcfd11ea99983fbd68fac69d6891561c4b53d119d438815898b3f31d5d6b5b0c->leave($__internal_fcfd11ea99983fbd68fac69d6891561c4b53d119d438815898b3f31d5d6b5b0c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e3bdf14acfdd6d0b8b670a0be461e20403dc94436bc8b8e0328febd5e767a4f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3bdf14acfdd6d0b8b670a0be461e20403dc94436bc8b8e0328febd5e767a4f0->enter($__internal_e3bdf14acfdd6d0b8b670a0be461e20403dc94436bc8b8e0328febd5e767a4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_aa75e978bc308b127b6a409a9a6ec7b32905a57d0755cfde23c28f520713879e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa75e978bc308b127b6a409a9a6ec7b32905a57d0755cfde23c28f520713879e->enter($__internal_aa75e978bc308b127b6a409a9a6ec7b32905a57d0755cfde23c28f520713879e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_aa75e978bc308b127b6a409a9a6ec7b32905a57d0755cfde23c28f520713879e->leave($__internal_aa75e978bc308b127b6a409a9a6ec7b32905a57d0755cfde23c28f520713879e_prof);

        
        $__internal_e3bdf14acfdd6d0b8b670a0be461e20403dc94436bc8b8e0328febd5e767a4f0->leave($__internal_e3bdf14acfdd6d0b8b670a0be461e20403dc94436bc8b8e0328febd5e767a4f0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_61be598575a7657ba29887313fec5074cc6155c309c614f2ccc3fa52598b8b77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61be598575a7657ba29887313fec5074cc6155c309c614f2ccc3fa52598b8b77->enter($__internal_61be598575a7657ba29887313fec5074cc6155c309c614f2ccc3fa52598b8b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_242faa0e9ca129e159908ad50926c6584d44d4ee37f05c9ab4b909452598212b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_242faa0e9ca129e159908ad50926c6584d44d4ee37f05c9ab4b909452598212b->enter($__internal_242faa0e9ca129e159908ad50926c6584d44d4ee37f05c9ab4b909452598212b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_242faa0e9ca129e159908ad50926c6584d44d4ee37f05c9ab4b909452598212b->leave($__internal_242faa0e9ca129e159908ad50926c6584d44d4ee37f05c9ab4b909452598212b_prof);

        
        $__internal_61be598575a7657ba29887313fec5074cc6155c309c614f2ccc3fa52598b8b77->leave($__internal_61be598575a7657ba29887313fec5074cc6155c309c614f2ccc3fa52598b8b77_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3b1b925598246c84805a122d5d463426474f498e84cd48b1c82a9b1dea6ce904 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b1b925598246c84805a122d5d463426474f498e84cd48b1c82a9b1dea6ce904->enter($__internal_3b1b925598246c84805a122d5d463426474f498e84cd48b1c82a9b1dea6ce904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ef03cbc16917caad5634698e2d5fa0c5d1ed8057d64f3faf89e7bc0b6d42d7e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef03cbc16917caad5634698e2d5fa0c5d1ed8057d64f3faf89e7bc0b6d42d7e9->enter($__internal_ef03cbc16917caad5634698e2d5fa0c5d1ed8057d64f3faf89e7bc0b6d42d7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ef03cbc16917caad5634698e2d5fa0c5d1ed8057d64f3faf89e7bc0b6d42d7e9->leave($__internal_ef03cbc16917caad5634698e2d5fa0c5d1ed8057d64f3faf89e7bc0b6d42d7e9_prof);

        
        $__internal_3b1b925598246c84805a122d5d463426474f498e84cd48b1c82a9b1dea6ce904->leave($__internal_3b1b925598246c84805a122d5d463426474f498e84cd48b1c82a9b1dea6ce904_prof);

    }

    public function getTemplateName()
    {
        return "JustBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
</head>
<body>
    {% block body %}{% endblock %}
    {% block javascripts %}{% endblock %}
</body>
</html>
", "JustBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/src/JustBundle/Resources/views/Default/index.html.twig");
    }
}
