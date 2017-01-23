<?php

/* base.html.twig */
class __TwigTemplate_d81bae7d5325a7f23ba92e849144467ab8ed2421c201cbf1d70c17582ad76de7 extends Twig_Template
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
        $__internal_10a9bc2d90f96829f39f1948dab387bc3e919983442c9b41734b7842f3d24b40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10a9bc2d90f96829f39f1948dab387bc3e919983442c9b41734b7842f3d24b40->enter($__internal_10a9bc2d90f96829f39f1948dab387bc3e919983442c9b41734b7842f3d24b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_62002bf6f4897dac0e94432127855330dbe1fb315c3b764f797b23b82d9d6124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62002bf6f4897dac0e94432127855330dbe1fb315c3b764f797b23b82d9d6124->enter($__internal_62002bf6f4897dac0e94432127855330dbe1fb315c3b764f797b23b82d9d6124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_10a9bc2d90f96829f39f1948dab387bc3e919983442c9b41734b7842f3d24b40->leave($__internal_10a9bc2d90f96829f39f1948dab387bc3e919983442c9b41734b7842f3d24b40_prof);

        
        $__internal_62002bf6f4897dac0e94432127855330dbe1fb315c3b764f797b23b82d9d6124->leave($__internal_62002bf6f4897dac0e94432127855330dbe1fb315c3b764f797b23b82d9d6124_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ab84a0b51439690a0bd69206fd0abc2e3a32754003cb10cd09ec053cf8b21e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ab84a0b51439690a0bd69206fd0abc2e3a32754003cb10cd09ec053cf8b21e0->enter($__internal_1ab84a0b51439690a0bd69206fd0abc2e3a32754003cb10cd09ec053cf8b21e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_810a5d9264eec2811b82da9c48efd59e76fd205b88d4a587c62022caaadc995e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_810a5d9264eec2811b82da9c48efd59e76fd205b88d4a587c62022caaadc995e->enter($__internal_810a5d9264eec2811b82da9c48efd59e76fd205b88d4a587c62022caaadc995e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_810a5d9264eec2811b82da9c48efd59e76fd205b88d4a587c62022caaadc995e->leave($__internal_810a5d9264eec2811b82da9c48efd59e76fd205b88d4a587c62022caaadc995e_prof);

        
        $__internal_1ab84a0b51439690a0bd69206fd0abc2e3a32754003cb10cd09ec053cf8b21e0->leave($__internal_1ab84a0b51439690a0bd69206fd0abc2e3a32754003cb10cd09ec053cf8b21e0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6551353987af3456180ce657b7b1d5768421007e5646bd7f3f8778b307f7ce78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6551353987af3456180ce657b7b1d5768421007e5646bd7f3f8778b307f7ce78->enter($__internal_6551353987af3456180ce657b7b1d5768421007e5646bd7f3f8778b307f7ce78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0422c333135508baa77cb9423390356a2533e25a010c7c6e6b96650fe159902d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0422c333135508baa77cb9423390356a2533e25a010c7c6e6b96650fe159902d->enter($__internal_0422c333135508baa77cb9423390356a2533e25a010c7c6e6b96650fe159902d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0422c333135508baa77cb9423390356a2533e25a010c7c6e6b96650fe159902d->leave($__internal_0422c333135508baa77cb9423390356a2533e25a010c7c6e6b96650fe159902d_prof);

        
        $__internal_6551353987af3456180ce657b7b1d5768421007e5646bd7f3f8778b307f7ce78->leave($__internal_6551353987af3456180ce657b7b1d5768421007e5646bd7f3f8778b307f7ce78_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f3b6f4102ad35513306d80f5fc553e9b07da721231aee8659ee4f2ced3257cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f3b6f4102ad35513306d80f5fc553e9b07da721231aee8659ee4f2ced3257cb->enter($__internal_1f3b6f4102ad35513306d80f5fc553e9b07da721231aee8659ee4f2ced3257cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4ba7d147f9d17d1d908748aa1ca6efa237d370be5ce4175ccaf02e88719c5c2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ba7d147f9d17d1d908748aa1ca6efa237d370be5ce4175ccaf02e88719c5c2c->enter($__internal_4ba7d147f9d17d1d908748aa1ca6efa237d370be5ce4175ccaf02e88719c5c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4ba7d147f9d17d1d908748aa1ca6efa237d370be5ce4175ccaf02e88719c5c2c->leave($__internal_4ba7d147f9d17d1d908748aa1ca6efa237d370be5ce4175ccaf02e88719c5c2c_prof);

        
        $__internal_1f3b6f4102ad35513306d80f5fc553e9b07da721231aee8659ee4f2ced3257cb->leave($__internal_1f3b6f4102ad35513306d80f5fc553e9b07da721231aee8659ee4f2ced3257cb_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fcf2423db739fa79e4d5f62927eae206860104ec69c50eb7c57662e1b8e89908 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcf2423db739fa79e4d5f62927eae206860104ec69c50eb7c57662e1b8e89908->enter($__internal_fcf2423db739fa79e4d5f62927eae206860104ec69c50eb7c57662e1b8e89908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2f124bf6b1808dfc3970371276dbd68835ed4e93c517568e1df2b63aee7d6f4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f124bf6b1808dfc3970371276dbd68835ed4e93c517568e1df2b63aee7d6f4e->enter($__internal_2f124bf6b1808dfc3970371276dbd68835ed4e93c517568e1df2b63aee7d6f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2f124bf6b1808dfc3970371276dbd68835ed4e93c517568e1df2b63aee7d6f4e->leave($__internal_2f124bf6b1808dfc3970371276dbd68835ed4e93c517568e1df2b63aee7d6f4e_prof);

        
        $__internal_fcf2423db739fa79e4d5f62927eae206860104ec69c50eb7c57662e1b8e89908->leave($__internal_fcf2423db739fa79e4d5f62927eae206860104ec69c50eb7c57662e1b8e89908_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "/Users/Whorthy/GitHub/Whorthy/ProjetSymfony/app/Resources/views/base.html.twig");
    }
}
