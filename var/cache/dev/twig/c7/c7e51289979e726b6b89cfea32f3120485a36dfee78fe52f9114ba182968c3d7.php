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
        $__internal_adc19abc360b564d9cd6f3edc81abe6c172f833c2950b67cf1668325df3f0f52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adc19abc360b564d9cd6f3edc81abe6c172f833c2950b67cf1668325df3f0f52->enter($__internal_adc19abc360b564d9cd6f3edc81abe6c172f833c2950b67cf1668325df3f0f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JustBundle:Default:index.html.twig"));

        $__internal_ec7fd935ae440b85b53bf16f62a79883c7cc0935ddd8fb3898950556993c7441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec7fd935ae440b85b53bf16f62a79883c7cc0935ddd8fb3898950556993c7441->enter($__internal_ec7fd935ae440b85b53bf16f62a79883c7cc0935ddd8fb3898950556993c7441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JustBundle:Default:index.html.twig"));

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
        
        $__internal_adc19abc360b564d9cd6f3edc81abe6c172f833c2950b67cf1668325df3f0f52->leave($__internal_adc19abc360b564d9cd6f3edc81abe6c172f833c2950b67cf1668325df3f0f52_prof);

        
        $__internal_ec7fd935ae440b85b53bf16f62a79883c7cc0935ddd8fb3898950556993c7441->leave($__internal_ec7fd935ae440b85b53bf16f62a79883c7cc0935ddd8fb3898950556993c7441_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_17e916bf554f770533ae0fc444af134037d1d926d9de2386484cc459d1009edb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17e916bf554f770533ae0fc444af134037d1d926d9de2386484cc459d1009edb->enter($__internal_17e916bf554f770533ae0fc444af134037d1d926d9de2386484cc459d1009edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_86fb6f972b7b4c2c6a027f5864814550e5b942aa4020b2cf48303db714eb418f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86fb6f972b7b4c2c6a027f5864814550e5b942aa4020b2cf48303db714eb418f->enter($__internal_86fb6f972b7b4c2c6a027f5864814550e5b942aa4020b2cf48303db714eb418f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_86fb6f972b7b4c2c6a027f5864814550e5b942aa4020b2cf48303db714eb418f->leave($__internal_86fb6f972b7b4c2c6a027f5864814550e5b942aa4020b2cf48303db714eb418f_prof);

        
        $__internal_17e916bf554f770533ae0fc444af134037d1d926d9de2386484cc459d1009edb->leave($__internal_17e916bf554f770533ae0fc444af134037d1d926d9de2386484cc459d1009edb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_407847e883cda6541b6bb587828b44531f26d279f55e22539a3b0ad3b447dfb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_407847e883cda6541b6bb587828b44531f26d279f55e22539a3b0ad3b447dfb0->enter($__internal_407847e883cda6541b6bb587828b44531f26d279f55e22539a3b0ad3b447dfb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_dbd09fc6fd8a96e721d34db55aef9f1769016521eaff30575d20d733b044261a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbd09fc6fd8a96e721d34db55aef9f1769016521eaff30575d20d733b044261a->enter($__internal_dbd09fc6fd8a96e721d34db55aef9f1769016521eaff30575d20d733b044261a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_dbd09fc6fd8a96e721d34db55aef9f1769016521eaff30575d20d733b044261a->leave($__internal_dbd09fc6fd8a96e721d34db55aef9f1769016521eaff30575d20d733b044261a_prof);

        
        $__internal_407847e883cda6541b6bb587828b44531f26d279f55e22539a3b0ad3b447dfb0->leave($__internal_407847e883cda6541b6bb587828b44531f26d279f55e22539a3b0ad3b447dfb0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a981487c14387ca9ccdeaab9a4883a634149389fdb833e2a65535fe27f405561 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a981487c14387ca9ccdeaab9a4883a634149389fdb833e2a65535fe27f405561->enter($__internal_a981487c14387ca9ccdeaab9a4883a634149389fdb833e2a65535fe27f405561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ff08cf3f4fd58920385aa9d591ec0171a33d9928f8a9ad4b3a476d8bc18e6b60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff08cf3f4fd58920385aa9d591ec0171a33d9928f8a9ad4b3a476d8bc18e6b60->enter($__internal_ff08cf3f4fd58920385aa9d591ec0171a33d9928f8a9ad4b3a476d8bc18e6b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ff08cf3f4fd58920385aa9d591ec0171a33d9928f8a9ad4b3a476d8bc18e6b60->leave($__internal_ff08cf3f4fd58920385aa9d591ec0171a33d9928f8a9ad4b3a476d8bc18e6b60_prof);

        
        $__internal_a981487c14387ca9ccdeaab9a4883a634149389fdb833e2a65535fe27f405561->leave($__internal_a981487c14387ca9ccdeaab9a4883a634149389fdb833e2a65535fe27f405561_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e2cf98c44fb02ec59b10d9f4dd0dd19d43b34f99d055fc7198ab740ee1240480 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2cf98c44fb02ec59b10d9f4dd0dd19d43b34f99d055fc7198ab740ee1240480->enter($__internal_e2cf98c44fb02ec59b10d9f4dd0dd19d43b34f99d055fc7198ab740ee1240480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b005369a065aa4d7d2ad8937dcacc38a8e4ba626832c66e5d3c3a91de05c4ebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b005369a065aa4d7d2ad8937dcacc38a8e4ba626832c66e5d3c3a91de05c4ebe->enter($__internal_b005369a065aa4d7d2ad8937dcacc38a8e4ba626832c66e5d3c3a91de05c4ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b005369a065aa4d7d2ad8937dcacc38a8e4ba626832c66e5d3c3a91de05c4ebe->leave($__internal_b005369a065aa4d7d2ad8937dcacc38a8e4ba626832c66e5d3c3a91de05c4ebe_prof);

        
        $__internal_e2cf98c44fb02ec59b10d9f4dd0dd19d43b34f99d055fc7198ab740ee1240480->leave($__internal_e2cf98c44fb02ec59b10d9f4dd0dd19d43b34f99d055fc7198ab740ee1240480_prof);

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
