<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* pages/edit.html.twig */
class __TwigTemplate_55284c7ccf541db2503409beda63125e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <main>
        <div class=\"py-5 bg-light\">
            <div class=\"container\">
                <div class=\"py-5 text-center\">
                <h2>Edit Page:</h2>
                   
                
            
                 ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
        echo "
                    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'widget');
        echo "
<!--
                    <button type=\"submit\" class=\"uppercase mt15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-4xl\">
                    Submit Changes
                    </button>
-->

                 ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_end');
        echo "

                </div>
            </div>
        </div>
    </main>

    
<!--
                <img class=\"img-fluid\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 29, $this->source); })()), "image", [], "any", false, false, false, 29), "html", null, true);
        echo "\" alt=\"\">

                <div class=\"lead mb-4 py-5\">";
        // line 31
        echo twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 31, $this->source); })()), "text", [], "any", false, false, false, 31);
        echo "</div>
                -->
                
                
                <!--
                Edit title: 
                <input type=\"text\" name=\"editTitle\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 37, $this->source); })()), "title", [], "any", false, false, false, 37), "html", null, true);
        echo "\" size=\"40\"> <br>
                -->
            <!--
                Edit text: <input type=\"text\" name=\"editText\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 40, $this->source); })()), "text", [], "any", false, false, false, 40), "html", null, true);
        echo "\">   <br>
            -->
            <!--
                <h2>Edit Text:</h2>
                <div  class=\"lead mb-4 py-5\" contenteditable=\"true\">";
        // line 44
        echo twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 44, $this->source); })()), "text", [], "any", false, false, false, 44);
        echo "</div>
                <input type=\"button\" name=\"editSubmit\" value=\"submit\"> <br>

                <div class=\"d-grid gap-2 d-sm-flex justify-content-sm-center\">
                    <a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" type=\"button\" class=\"btn btn-secondary btn-lg px-4 gap-3\">Back</a>
                </div>
                -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "pages/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 48,  122 => 44,  115 => 40,  109 => 37,  100 => 31,  95 => 29,  83 => 20,  73 => 13,  69 => 12,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block main %}
    <main>
        <div class=\"py-5 bg-light\">
            <div class=\"container\">
                <div class=\"py-5 text-center\">
                <h2>Edit Page:</h2>
                   
                
            
                 {{ form_start(form) }}
                    {{ form_widget(form) }}
<!--
                    <button type=\"submit\" class=\"uppercase mt15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-4xl\">
                    Submit Changes
                    </button>
-->

                 {{ form_end(form) }}

                </div>
            </div>
        </div>
    </main>

    
<!--
                <img class=\"img-fluid\" src=\"{{ article.image }}\" alt=\"\">

                <div class=\"lead mb-4 py-5\">{{ article.text | raw }}</div>
                -->
                
                
                <!--
                Edit title: 
                <input type=\"text\" name=\"editTitle\" value=\"{{article.title}}\" size=\"40\"> <br>
                -->
            <!--
                Edit text: <input type=\"text\" name=\"editText\" value=\"{{article.text}}\">   <br>
            -->
            <!--
                <h2>Edit Text:</h2>
                <div  class=\"lead mb-4 py-5\" contenteditable=\"true\">{{ article.text | raw }}</div>
                <input type=\"button\" name=\"editSubmit\" value=\"submit\"> <br>

                <div class=\"d-grid gap-2 d-sm-flex justify-content-sm-center\">
                    <a href=\"{{ path('home') }}\" type=\"button\" class=\"btn btn-secondary btn-lg px-4 gap-3\">Back</a>
                </div>
                -->
{% endblock %}



            ", "pages/edit.html.twig", "/code/templates/pages/edit.html.twig");
    }
}
