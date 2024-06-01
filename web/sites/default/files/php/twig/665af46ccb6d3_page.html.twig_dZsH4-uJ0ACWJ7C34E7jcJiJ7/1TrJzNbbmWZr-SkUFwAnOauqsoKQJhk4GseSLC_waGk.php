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

/* themes/custom/gca/templates/layout/page.html.twig */
class __TwigTemplate_ca41bb9ed3b6c1bfa24a63e643fd0712 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"page-wrapper\" class=\"h-100\">
\t<div id=\"page\" class=\"d-flex flex-column h-100\">
\t\t<div id=\"header\">
\t\t\t<div class=\"container\">
\t\t\t\t<div
\t\t\t\t\tid=\"site-name_lang-switcher_toggle-light\" class=\"row align-items-center\">
\t\t\t\t\t<!-- Begin Top header right-->
\t\t\t\t\t";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_right", [], "any", false, false, true, 8)) {
            // line 9
            echo "\t\t\t\t\t\t<div id=\"top-header-right\" class=\"col-lg-6 pe-0\">
\t\t\t\t\t\t\t";
            // line 10
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_right", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 13
        echo "\t\t\t\t\t<!--End Top header right-->

\t\t\t\t\t<!-- Begin Top header left-->
\t\t\t\t\t";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_left", [], "any", false, false, true, 16)) {
            // line 17
            echo "\t\t\t\t\t\t<div id=\"top-header-left\" class=\"col-lg-6\">
\t\t\t\t\t\t\t<div class=\"d-flex justify-content-end gap-4 align-items-center\">
\t\t\t\t\t\t\t\t";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_left", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 23
        echo "\t\t\t\t\t<!--End Top header left-->
\t\t\t\t</div>
\t\t\t\t<div
\t\t\t\t\tid=\"logo_menu_search\" class=\"row align-items-center\">
\t\t\t\t\t<!-- Begin highlighted header right-->
\t\t\t\t\t";
        // line 28
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted_header_right", [], "any", false, false, true, 28)) {
            // line 29
            echo "\t\t\t\t\t\t<div id=\"highlighted-header-right\" class=\"flex-grow-1 flex-shrink-0 col\">
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted_header_right", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t\t<!--End highlighted header right-->

\t\t\t\t\t<!-- Begin highlighted header left-->
\t\t\t\t\t";
        // line 38
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted_header_left", [], "any", false, false, true, 38)) {
            // line 39
            echo "\t\t\t\t\t\t<div id=\"highlighted-header-left\" class=\"flex-grow-0 flex-shrink-1 col\">
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted_header_left", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 45
        echo "\t\t\t\t\t<!--End highlighted header left-->
\t\t\t\t</div>
\t\t\t\t<div
\t\t\t\t\tid=\"site-slogan\" class=\"row\">
\t\t\t\t\t<!-- Begin middle header top-->
\t\t\t\t\t";
        // line 50
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "middle_header_top", [], "any", false, false, true, 50)) {
            // line 51
            echo "\t\t\t\t\t\t<div id=\"middle-header-top\" class=\"column\">
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t";
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "middle_header_top", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 57
        echo "\t\t\t\t\t<!--End Middle header right-->
\t\t\t\t</div>
\t\t\t\t<div
\t\t\t\t\tid=\"vision-century\" class=\"row\">
\t\t\t\t\t<!-- Begin Middle header bottom-->
\t\t\t\t\t";
        // line 62
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "middle_header_bottom", [], "any", false, false, true, 62)) {
            // line 63
            echo "\t\t\t\t\t\t<div id=\"middle-header-bottom\" class=\"column\">
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t";
            // line 65
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "middle_header_bottom", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 69
        echo "\t\t\t\t\t<!--End Middle header bottom-->
\t\t\t\t</div>
\t\t\t\t<div
\t\t\t\t\tid=\"electronic-services-slider\" class=\"row\">
\t\t\t\t\t<!-- Begin Bottom header -->
\t\t\t\t\t";
        // line 74
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_header", [], "any", false, false, true, 74)) {
            // line 75
            echo "\t\t\t\t\t\t<div id=\"bottom-header\" class=\"column\">
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t";
            // line 77
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_header", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 81
        echo "\t\t\t\t\t<!--End Bottom header-->
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"main-wrapper\">
\t\t\t<div id=\"main\">
\t\t\t\t<div class=\"more-link row\">
\t\t\t\t\t";
        // line 88
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 88, $this->source), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div
\t\t\t\t\tid=\"court-news\" class=\"row\">
\t\t\t\t\t<!-- Begin Highlighted first-->
\t\t\t\t\t";
        // line 93
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted_first", [], "any", false, false, true, 93)) {
            // line 94
            echo "\t\t\t\t\t\t<div id=\"highlighted-first\">
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t";
            // line 96
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted_first", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 100
        echo "\t\t\t\t\t<!--End Highlighted first-->
\t\t\t\t</div>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t";
        // line 103
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<footer id=\"footer-wrapper\" class=\"footer mt-auto py-3\">

\t\t\t<div class=\"container\">
                <div>
                    ";
        // line 111
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
        echo "
                </div>
                <div>
                    ";
        // line 114
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 114), 114, $this->source), "html", null, true);
        echo "
                </div>
\t\t\t\t<div class=\"row align-items-center logo-social-links\">
\t\t\t\t\t<div class=\"col-md-6\" id=\"footer-logo\">
\t\t\t\t\t\t";
        // line 118
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_gca_logo", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 pe-0\">
\t\t\t\t\t\t<div class=\"justify-content-end nav social_links\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<svg width=\"20\" height=\"20\" viewbox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<path d=\"M4.1496 2.0748C4.1496 3.23669 3.23668 4.1496 2.0748 4.1496C0.912911 4.1496 0 3.23669 0 2.0748C0 0.912911 0.912911 0 2.0748 0C3.23668 0 4.1496 0.912911 4.1496 2.0748ZM4.1496 5.80943H0V19.0881H4.1496V5.80943ZM10.7889 5.80943H6.63935V19.0881H10.7889V12.1168C10.7889 8.2162 15.7685 7.88423 15.7685 12.1168V19.0881H19.9181V10.706C19.9181 4.1496 12.5318 4.39857 10.7889 7.63526V5.80943Z\" fill=\"white\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<svg width=\"22\" height=\"22\" viewbox=\"0 0 22 22\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<path d=\"M10.9549 2.0084C13.8762 2.0084 14.2414 2.0084 15.4282 2.0997C18.4408 2.19099 19.8102 3.65164 19.9015 6.57296C19.9928 7.75974 19.9928 8.03362 19.9928 10.9549C19.9928 13.8762 19.9928 14.2414 19.9015 15.3369C19.8102 18.2582 18.3495 19.7189 15.4282 19.8102C14.2414 19.9015 13.9675 19.9015 10.9549 19.9015C8.03362 19.9015 7.66845 19.9015 6.57296 19.8102C3.56035 19.7189 2.19099 18.2582 2.0997 15.3369C2.0084 14.1501 2.0084 13.8762 2.0084 10.9549C2.0084 8.03362 2.0084 7.66845 2.0997 6.57296C2.19099 3.65164 3.65164 2.19099 6.57296 2.0997C7.66845 2.0084 8.03362 2.0084 10.9549 2.0084ZM10.9549 0C7.94233 0 7.57716 0 6.48167 0.0912911C2.46486 0.273873 0.273873 2.46486 0.0912911 6.48167C0 7.57716 0 7.94233 0 10.9549C0 13.9675 0 14.3327 0.0912911 15.4282C0.273873 19.445 2.46486 21.636 6.48167 21.8186C7.57716 21.9099 7.94233 21.9099 10.9549 21.9099C13.9675 21.9099 14.3327 21.9099 15.4282 21.8186C19.445 21.636 21.636 19.445 21.8186 15.4282C21.9099 14.3327 21.9099 13.9675 21.9099 10.9549C21.9099 7.94233 21.9099 7.57716 21.8186 6.48167C21.636 2.46486 19.445 0.273873 15.4282 0.0912911C14.3327 0 13.9675 0 10.9549 0ZM10.9549 5.29488C7.85104 5.29488 5.29488 7.85104 5.29488 10.9549C5.29488 14.0588 7.85104 16.615 10.9549 16.615C14.0588 16.615 16.615 14.0588 16.615 10.9549C16.615 7.85104 14.0588 5.29488 10.9549 5.29488ZM10.9549 14.6066C8.94653 14.6066 7.30329 12.9633 7.30329 10.9549C7.30329 8.94653 8.94653 7.30329 10.9549 7.30329C12.9633 7.30329 14.6066 8.94653 14.6066 10.9549C14.6066 12.9633 12.9633 14.6066 10.9549 14.6066ZM16.7976 3.83423C16.0672 3.83423 15.5195 4.38197 15.5195 5.1123C15.5195 5.84263 16.0672 6.39038 16.7976 6.39038C17.5279 6.39038 18.0756 5.84263 18.0756 5.1123C18.0756 4.38197 17.5279 3.83423 16.7976 3.83423Z\" fill=\"white\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<svg width=\"22\" height=\"18\" viewbox=\"0 0 22 18\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<path d=\"M6.89046 17.8066C15.1587 17.8066 19.6803 10.9566 19.6803 5.01677C19.6803 4.82215 19.6763 4.62853 19.6674 4.43565C20.545 3.8012 21.3081 3.00926 21.9099 2.10818C21.1045 2.46602 20.2378 2.70699 19.3285 2.81564C20.2565 2.25919 20.9692 1.37854 21.3053 0.328936C20.4366 0.844019 19.4747 1.21831 18.4511 1.42016C17.6305 0.546482 16.4622 0 15.1697 0C12.687 0 10.6737 2.01324 10.6737 4.49471C10.6737 4.84757 10.7133 5.19046 10.7901 5.51964C7.05443 5.332 3.74164 3.54304 1.52482 0.823336C1.13832 1.48744 0.915787 2.25944 0.915787 3.08253C0.915787 4.64198 1.70947 6.01878 2.91631 6.82442C2.17895 6.80174 1.48619 6.5989 0.880402 6.26199C0.879405 6.28068 0.879405 6.29962 0.879405 6.3193C0.879405 8.49651 2.42914 10.3141 4.48574 10.726C4.10821 10.829 3.71099 10.8843 3.30082 10.8843C3.01126 10.8843 2.72967 10.8554 2.4558 10.8033C3.02795 12.589 4.68758 13.8888 6.65522 13.9254C5.11645 15.1313 3.17822 15.8497 1.07228 15.8497C0.709704 15.8497 0.351862 15.829 0 15.7874C1.98931 17.0623 4.35142 17.8066 6.89046 17.8066Z\" fill=\"white\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<svg width=\"9\" height=\"18\" viewbox=\"0 0 9 18\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<path d=\"M2.25 6H0V9H2.25V18H6V9H8.7L9 6H6V4.725C6 4.05 6.15 3.75 6.825 3.75H9V0H6.15C3.45 0 2.25 1.2 2.25 3.45V6Z\" fill=\"white\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<svg width=\"24\" height=\"18\" viewbox=\"0 0 24 18\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M19.3543 2.209L19.3543 2.20904L19.3669 2.21002C20.1663 2.27151 20.59 2.42323 20.8235 2.56231C21.015 2.67642 21.1839 2.84198 21.345 3.20699C21.5271 3.61949 21.6826 4.2549 21.781 5.25143C21.8783 6.23726 21.9099 7.45744 21.9099 8.98802C21.9099 10.5183 21.8783 11.7455 21.7809 12.74C21.6823 13.7459 21.5262 14.3923 21.3424 14.8124C21.1789 15.1861 21.0111 15.3454 20.8335 15.4498C20.6151 15.5783 20.2062 15.7223 19.4177 15.7628L19.4177 15.7628L19.4092 15.7632C15.9049 15.9579 8.03711 15.9583 4.51455 15.7645C3.72821 15.702 3.30965 15.5516 3.07821 15.4137C2.88668 15.2996 2.71777 15.1341 2.55664 14.7691C2.37454 14.3566 2.21903 13.7212 2.12066 12.7246C2.02335 11.7388 1.99181 10.5186 1.99181 8.98802C1.99181 7.45744 2.02335 6.23726 2.12066 5.25143C2.21903 4.2549 2.37454 3.61949 2.55664 3.20699C2.71777 2.84198 2.88668 2.67642 3.07821 2.56231C3.31163 2.42323 3.73536 2.27151 4.53474 2.21002L4.53474 2.21006L4.54738 2.209C8.02255 1.91941 15.8791 1.91941 19.3543 2.209ZM0 8.98802C0 15.1626 0.497952 17.4532 4.38197 17.752C7.96722 17.9512 15.9344 17.9512 19.5197 17.752C23.4037 17.5528 23.9017 15.1626 23.9017 8.98802C23.9017 2.81343 23.4037 0.522849 19.5197 0.224078C15.9344 -0.0746927 7.96722 -0.0746927 4.38197 0.224078C0.497952 0.522849 0 2.81343 0 8.98802ZM10.404 12.2511C9.74183 12.5822 8.96273 12.1007 8.96273 11.3603V6.61591C8.96273 5.87557 9.74183 5.39406 10.404 5.72515L15.1484 8.09735C15.8825 8.46437 15.8825 9.51186 15.1484 9.87888L10.404 12.2511Z\" fill=\"white\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"text-center copyright\">
\t\t\t\t\t<p class=\"text-white m-0\">
\t\t\t\t\t\t";
        // line 152
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_copyright", [], "any", false, false, true, 152), 152, $this->source), "html", null, true);
        echo "
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t</div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "more"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/gca/templates/layout/page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  271 => 152,  234 => 118,  227 => 114,  221 => 111,  210 => 103,  205 => 100,  198 => 96,  194 => 94,  192 => 93,  184 => 88,  175 => 81,  168 => 77,  164 => 75,  162 => 74,  155 => 69,  148 => 65,  144 => 63,  142 => 62,  135 => 57,  128 => 53,  124 => 51,  122 => 50,  115 => 45,  108 => 41,  104 => 39,  102 => 38,  97 => 35,  90 => 31,  86 => 29,  84 => 28,  77 => 23,  70 => 19,  66 => 17,  64 => 16,  59 => 13,  53 => 10,  50 => 9,  48 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/gca/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\gca.gov.sa.dev\\web\\themes\\custom\\gca\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 8);
        static $filters = array("escape" => 10);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
