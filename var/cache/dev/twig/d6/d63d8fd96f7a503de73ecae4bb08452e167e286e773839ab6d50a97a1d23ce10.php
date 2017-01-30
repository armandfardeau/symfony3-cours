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
        $__internal_2fc129c06c407a58acd4391e3f4ec90d366245225f63c4574f5f65eca77c6d9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fc129c06c407a58acd4391e3f4ec90d366245225f63c4574f5f65eca77c6d9b->enter($__internal_2fc129c06c407a58acd4391e3f4ec90d366245225f63c4574f5f65eca77c6d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BunkerBundle:Default:index.html.twig"));

        $__internal_a08e89310d06ffde74b2a72c7a94839fed4293d0e1b1fa39cf3dbf8adda30573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a08e89310d06ffde74b2a72c7a94839fed4293d0e1b1fa39cf3dbf8adda30573->enter($__internal_a08e89310d06ffde74b2a72c7a94839fed4293d0e1b1fa39cf3dbf8adda30573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BunkerBundle:Default:index.html.twig"));

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
        
        $__internal_2fc129c06c407a58acd4391e3f4ec90d366245225f63c4574f5f65eca77c6d9b->leave($__internal_2fc129c06c407a58acd4391e3f4ec90d366245225f63c4574f5f65eca77c6d9b_prof);

        
        $__internal_a08e89310d06ffde74b2a72c7a94839fed4293d0e1b1fa39cf3dbf8adda30573->leave($__internal_a08e89310d06ffde74b2a72c7a94839fed4293d0e1b1fa39cf3dbf8adda30573_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0278ca16386c593c8fdb20449b5b866b7aadf46262a1034d28e4f853e9622f12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0278ca16386c593c8fdb20449b5b866b7aadf46262a1034d28e4f853e9622f12->enter($__internal_0278ca16386c593c8fdb20449b5b866b7aadf46262a1034d28e4f853e9622f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a44574623403716ee841d536561ec37c5e8f732a7501b06028ec47c172fe75c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a44574623403716ee841d536561ec37c5e8f732a7501b06028ec47c172fe75c5->enter($__internal_a44574623403716ee841d536561ec37c5e8f732a7501b06028ec47c172fe75c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a44574623403716ee841d536561ec37c5e8f732a7501b06028ec47c172fe75c5->leave($__internal_a44574623403716ee841d536561ec37c5e8f732a7501b06028ec47c172fe75c5_prof);

        
        $__internal_0278ca16386c593c8fdb20449b5b866b7aadf46262a1034d28e4f853e9622f12->leave($__internal_0278ca16386c593c8fdb20449b5b866b7aadf46262a1034d28e4f853e9622f12_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_95d0566b4d3d461c624a7b298e71039154cb71cd25d94ee41a857c1e7abe36f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95d0566b4d3d461c624a7b298e71039154cb71cd25d94ee41a857c1e7abe36f5->enter($__internal_95d0566b4d3d461c624a7b298e71039154cb71cd25d94ee41a857c1e7abe36f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_87c52a4853f39db1eabd2e8c3d1f454207d673cff941b16e3cecfa421a0ccc4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87c52a4853f39db1eabd2e8c3d1f454207d673cff941b16e3cecfa421a0ccc4f->enter($__internal_87c52a4853f39db1eabd2e8c3d1f454207d673cff941b16e3cecfa421a0ccc4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_87c52a4853f39db1eabd2e8c3d1f454207d673cff941b16e3cecfa421a0ccc4f->leave($__internal_87c52a4853f39db1eabd2e8c3d1f454207d673cff941b16e3cecfa421a0ccc4f_prof);

        
        $__internal_95d0566b4d3d461c624a7b298e71039154cb71cd25d94ee41a857c1e7abe36f5->leave($__internal_95d0566b4d3d461c624a7b298e71039154cb71cd25d94ee41a857c1e7abe36f5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1c23f99495423ba2b61d8c8da3ee3cbfb9d9461bbafcfab60f8759d6ddcdf6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1c23f99495423ba2b61d8c8da3ee3cbfb9d9461bbafcfab60f8759d6ddcdf6f->enter($__internal_c1c23f99495423ba2b61d8c8da3ee3cbfb9d9461bbafcfab60f8759d6ddcdf6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_376c96dd04c60915451d4c1fc23711b74902c07341ee2cd03fc676c165cabdd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_376c96dd04c60915451d4c1fc23711b74902c07341ee2cd03fc676c165cabdd3->enter($__internal_376c96dd04c60915451d4c1fc23711b74902c07341ee2cd03fc676c165cabdd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "        <h1>SUPRISE MOTHERFUCKER</h1>
    ";
        
        $__internal_376c96dd04c60915451d4c1fc23711b74902c07341ee2cd03fc676c165cabdd3->leave($__internal_376c96dd04c60915451d4c1fc23711b74902c07341ee2cd03fc676c165cabdd3_prof);

        
        $__internal_c1c23f99495423ba2b61d8c8da3ee3cbfb9d9461bbafcfab60f8759d6ddcdf6f->leave($__internal_c1c23f99495423ba2b61d8c8da3ee3cbfb9d9461bbafcfab60f8759d6ddcdf6f_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_118f08f8d5bf78136c6f4d933a3da4dfd6cdf20703607679489bb91bd31063ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_118f08f8d5bf78136c6f4d933a3da4dfd6cdf20703607679489bb91bd31063ce->enter($__internal_118f08f8d5bf78136c6f4d933a3da4dfd6cdf20703607679489bb91bd31063ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_640cc9c98a0aeb2d0fa169382bf9c1e3599e47cb7a0ff013a0427b60831ce97f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_640cc9c98a0aeb2d0fa169382bf9c1e3599e47cb7a0ff013a0427b60831ce97f->enter($__internal_640cc9c98a0aeb2d0fa169382bf9c1e3599e47cb7a0ff013a0427b60831ce97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_640cc9c98a0aeb2d0fa169382bf9c1e3599e47cb7a0ff013a0427b60831ce97f->leave($__internal_640cc9c98a0aeb2d0fa169382bf9c1e3599e47cb7a0ff013a0427b60831ce97f_prof);

        
        $__internal_118f08f8d5bf78136c6f4d933a3da4dfd6cdf20703607679489bb91bd31063ce->leave($__internal_118f08f8d5bf78136c6f4d933a3da4dfd6cdf20703607679489bb91bd31063ce_prof);

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
