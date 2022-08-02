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

/* form.html */
class __TwigTemplate_23a1aa68de48d46c69e9fb8b9c65bc55 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form.html"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\"><title>Shape Form</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css\">
    <script src=\"https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js\"></script>
    <script >


    <style>
        input[type\"text\"]{
            size:50px;
            width:40px;
        }


<br><br>
<!-- For single circle -->
<div class=\"container\">


    <form method=\"POST\" id=\"circle\" name=\"circle\" onsubmit=\"circleForm()\" class=\"form-inline\" action=\"\">
        <label for=\"radius\" class=\"mb-2 mr-sm-2\">Radius</label>
        <input type=\"text\"  class=\"form-control mb-2 mr-sm-2\" required id=\"radius\" placeholder=\"Enter a radius\" name=\"radius\">
        <input type=\"hidden\" name=\"thetype\" value=\"circle\">
        <div class=\"form-check mb-2 mr-sm-2\">

        </div>
        <button type=\"submit\"  class=\"btn btn-primary mb-2\">Submit</button>
    </form>
</div>


<br><br><hr>


<!--For A single rectangle -->
<div class=\"container\">
    <h2>Calculate Surface Area For A single rectangle</h2>
    <form method=\"post\" id=\"triangle\" class=\"form-inline\" action=\"\">
        <label for=\"a\" class=\"mb-2 mr-sm-2\"> Side 1:</label>
        <input type=\"text\" step=\"0.00\"  class=\"form-control mb-2 mr-sm-2\" id=\"a\" required placeholder=\"Enter the lenght of the first side\" name=\"a\">
        <label for=\"b\" class=\"mb-2 mr-sm-2\">Side 2:</label>
        <input type=\"text\" step=\"0.00\" class=\"form-control mb-2 mr-sm-2\" id=\"b\" required placeholder=\"Enter the lenght of the second side\" name=\"b\">
        <label for=\"c\" class=\"mb-2 mr-sm-2\">Side 3:</label>
        <input type=\"text\"  class=\"form-control mb-2 mr-sm-2\" id=\"c\" required placeholder=\"Enter the lenght of the third side\" name=\"c\">
        <div class=\"form-check mb-2 mr-sm-2\">

        </div>
        <button type=\"submit\" name=\"triangle\" class=\"btn btn-primary mb-2\">Submit</button>
    </form>
</div>
    <script>
        function circleForm() {
            if(Isset)
                var x = document.forms[\"circle\"][\"radius\"].value;
            if (x!==\"\")
            {
                window.location.href = \"/circle/+x\";

            }
        }
    </script>
<br><br><hr>


<!--For 2 Circles -->
<div class=\"container\">
    <h2>Calculate Diameter for two circles</h2>

    <form method=\"POST\"  id=\"twocircle\" class=\"form-inline\" action=\"\">
        <label for=\"radius\" class=\"mb-2 mr-sm-2\">Radius</label>
        <input type=\"text\"  class=\"form-control mb-2 mr-sm-2\" required  placeholder=\"Enter a radius\" name=\"radius\">
        <div class=\"form-check mb-2 mr-sm-2\">
            <label for=\"radius\" class=\"mb-2 mr-sm-2\">Radius 2</label>
            <input type=\"text\"  class=\"form-control mb-2 mr-sm-2\" required  placeholder=\"Enter the other radius\" name=\"rad2\">

            <button type=\"submit\" name=\"twocircle\" class=\"btn btn-primary mb-2\">Submit</button>
    </form>
</div>
<br><br><hr>

<!--For  two rectangle -->
<div class=\"container\">
    <h2>Calculate Surface  Area For two rectangle</h2>
    <form method=\"post\" id=\"twotriangle\" class=\"form-inline\" action=\"\">
        <label for=\"a\" class=\"mb-4 mr-sm-4\"> Side 1:</label>
        <input type=\"text\"  class=\"form-control mb-2 mr-sm-4\" required placeholder=\"Enter the lenght of the first side\" size=\"25px\" name=\"a\">
        <label for=\"b\" class=\"mb-4 mr-sm-4\">Side 2:</label>
        <input type=\"text\"  class=\"form-control mb-2 mr-sm-4\" required placeholder=\"Enter the lenght of the second side\" size=\"25px\" name=\"b\">
        <label for=\"c\" class=\"mb-4 mr-sm-4\">Side 3:</label>
        <input type=\"text\"  class=\"form-control mb-2 mr-sm-4\" required placeholder=\"Enter the lenght of the third side\" size=\"25px\" name=\"c\" >
        <br><br><hr>
        <label for=\"a\" class=\"mb-4 mr-sm-4\"> Side 1:</label>
        <input type=\"text\"  class=\"form-control mb-4 mr-sm-4\" required placeholder=\"Enter the lenght of the first side\" name=\"d\">
        <label for=\"b\" class=\"mb-4 mr-sm-4\">Side 2:</label>
        <input type=\"text\" class=\"form-control mb-4 mr-sm-4\" required placeholder=\"Enter the lenght of the second side\" name=\"e\">
        <label for=\"c\" class=\"mb-4 mr-sm-4\">Side 3:</label>
        <input type=\"text\"  class=\"form-control mb-4 mr-sm-4\" required placeholder=\"Enter the lenght of the third side\" name=\"f\">

        <div class=\"form-check mb-2 mr-sm-2\">

        </div>
        <button type=\"submit\" name=\"twotriangle\" class=\"btn btn-primary mb-2\">Submit</button>
    </form>
</div>
    <center>
    <div class=\"container\">
        <h2>Calculate Diameter for a single circle</h2>
    <button onclick=\"circlePrompt()\" class=\"btn btn-primary mb-2\">Calculate single circle here</button>
        <br><br><hr>
        <h2>Calculate Diameter for a two circle</h2>
        <button onclick=\"twocirclePrompt()\" class=\"btn btn-primary mb-2\">Calculate <two></two>Calculate two circle here</button>
        <br><br><hr>
        <h2>Calculate Surface  Area For single rectangle</h2>
        <button onclick=\"trianglePrompt()\" class=\"btn btn-primary mb-2\">Calculate single Triangle here</button>
        <br><br><hr>
        <h2>Calculate Surface  Area For two rectangle</h2>
        <button onclick=\"twotrianglePrompt()\" class=\"btn btn-primary mb-2\">Calculate two Triangle here</button>
    <script>
        function circlePrompt() {
            let radius = prompt(\"Enter the radius\");
            if (radius !== \"\" && radius != \"null\") {
                window.location.href = \"index.php/circle/\"+radius;
            }
        }

        function twocirclePrompt() {
            let radius = prompt(\"Enter the radius for first circle\");
            if (radius !== \"\" && radius !== null) {
                let radius2 = prompt(\"Enter the radius for second circle\");
                    if (radius2 !== \"\" && radius2 !== null) {
                    window.location.href = \"index.php/doublecircle/\"+radius+\"/\"+radius2;
                    }
            }
        }

        function trianglePrompt() {
            let a = prompt(\"Enter the first side\");
            if (a !== \"\" && a !== null) {
                let b = prompt(\"Enter the second side\");
                if (b !== \"\" && b !== null) {
                    let c = prompt(\"Enter the third side\");

                    if (c !== \"\" && c !== null) {
                        let turl = \"index.php/triangle/\" + a + \"/\" + b + \"/\" + c;
                        window.location.href = turl;
                    }
                }
            }
        }

        function twotrianglePrompt() {
            let a = prompt(\"Enter the first side for first triangle\");
            if (a !== \"\" && a !== null) {
                let b = prompt(\"Enter the second side for first triangle\");
                if (b !== \"\" && b !== null) {
                    let c = prompt(\"Enter the third side for first triangle\");

                    if (c !== \"\" && c !== null) {

                        let d = prompt(\"Enter the first side for second triangle\");
                        if (d !== \"\" && d !== null) {
                            let e = prompt(\"Enter the second side for second triangle\");
                            if (e !== \"\" && e !== null) {
                                let f = prompt(\"Enter the third side for second triangle\");

                                if (f !== \"\" && f !== null) {
                                    let turl = \"index.php/doubletriangle/\" + a + \"/\" + b + \"/\" + c + \"/\" + d + \"/\" + e + \"/\" + f;
                                    window.location.href = turl;
                                }
                            }
                        }

                    }
                }
            }
        }

    </script>
    </div>
    </center>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "form.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\"><title>Shape Form</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css\">
    <script src=\"https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js\"></script>
    <script >


    <style>
        input[type\"text\"]{
            size:50px;
            width:40px;
        }


<br><br>
<!-- For single circle -->
<div class=\"container\">


    <form method=\"POST\" id=\"circle\" name=\"circle\" onsubmit=\"circleForm()\" class=\"form-inline\" action=\"\">
        <label for=\"radius\" class=\"mb-2 mr-sm-2\">Radius</label>
        <input type=\"text\"  class=\"form-control mb-2 mr-sm-2\" required id=\"radius\" placeholder=\"Enter a radius\" name=\"radius\">
        <input type=\"hidden\" name=\"thetype\" value=\"circle\">
        <div class=\"form-check mb-2 mr-sm-2\">

        </div>
        <button type=\"submit\"  class=\"btn btn-primary mb-2\">Submit</button>
    </form>
</div>


<br><br><hr>


<!--For A single rectangle -->
<div class=\"container\">
    <h2>Calculate Surface Area For A single rectangle</h2>
    <form method=\"post\" id=\"triangle\" class=\"form-inline\" action=\"\">
        <label for=\"a\" class=\"mb-2 mr-sm-2\"> Side 1:</label>
        <input type=\"text\" step=\"0.00\"  class=\"form-control mb-2 mr-sm-2\" id=\"a\" required placeholder=\"Enter the lenght of the first side\" name=\"a\">
        <label for=\"b\" class=\"mb-2 mr-sm-2\">Side 2:</label>
        <input type=\"text\" step=\"0.00\" class=\"form-control mb-2 mr-sm-2\" id=\"b\" required placeholder=\"Enter the lenght of the second side\" name=\"b\">
        <label for=\"c\" class=\"mb-2 mr-sm-2\">Side 3:</label>
        <input type=\"text\"  class=\"form-control mb-2 mr-sm-2\" id=\"c\" required placeholder=\"Enter the lenght of the third side\" name=\"c\">
        <div class=\"form-check mb-2 mr-sm-2\">

        </div>
        <button type=\"submit\" name=\"triangle\" class=\"btn btn-primary mb-2\">Submit</button>
    </form>
</div>
    <script>
        function circleForm() {
            if(Isset)
                var x = document.forms[\"circle\"][\"radius\"].value;
            if (x!==\"\")
            {
                window.location.href = \"/circle/+x\";

            }
        }
    </script>
<br><br><hr>


<!--For 2 Circles -->
<div class=\"container\">
    <h2>Calculate Diameter for two circles</h2>

    <form method=\"POST\"  id=\"twocircle\" class=\"form-inline\" action=\"\">
        <label for=\"radius\" class=\"mb-2 mr-sm-2\">Radius</label>
        <input type=\"text\"  class=\"form-control mb-2 mr-sm-2\" required  placeholder=\"Enter a radius\" name=\"radius\">
        <div class=\"form-check mb-2 mr-sm-2\">
            <label for=\"radius\" class=\"mb-2 mr-sm-2\">Radius 2</label>
            <input type=\"text\"  class=\"form-control mb-2 mr-sm-2\" required  placeholder=\"Enter the other radius\" name=\"rad2\">

            <button type=\"submit\" name=\"twocircle\" class=\"btn btn-primary mb-2\">Submit</button>
    </form>
</div>
<br><br><hr>

<!--For  two rectangle -->
<div class=\"container\">
    <h2>Calculate Surface  Area For two rectangle</h2>
    <form method=\"post\" id=\"twotriangle\" class=\"form-inline\" action=\"\">
        <label for=\"a\" class=\"mb-4 mr-sm-4\"> Side 1:</label>
        <input type=\"text\"  class=\"form-control mb-2 mr-sm-4\" required placeholder=\"Enter the lenght of the first side\" size=\"25px\" name=\"a\">
        <label for=\"b\" class=\"mb-4 mr-sm-4\">Side 2:</label>
        <input type=\"text\"  class=\"form-control mb-2 mr-sm-4\" required placeholder=\"Enter the lenght of the second side\" size=\"25px\" name=\"b\">
        <label for=\"c\" class=\"mb-4 mr-sm-4\">Side 3:</label>
        <input type=\"text\"  class=\"form-control mb-2 mr-sm-4\" required placeholder=\"Enter the lenght of the third side\" size=\"25px\" name=\"c\" >
        <br><br><hr>
        <label for=\"a\" class=\"mb-4 mr-sm-4\"> Side 1:</label>
        <input type=\"text\"  class=\"form-control mb-4 mr-sm-4\" required placeholder=\"Enter the lenght of the first side\" name=\"d\">
        <label for=\"b\" class=\"mb-4 mr-sm-4\">Side 2:</label>
        <input type=\"text\" class=\"form-control mb-4 mr-sm-4\" required placeholder=\"Enter the lenght of the second side\" name=\"e\">
        <label for=\"c\" class=\"mb-4 mr-sm-4\">Side 3:</label>
        <input type=\"text\"  class=\"form-control mb-4 mr-sm-4\" required placeholder=\"Enter the lenght of the third side\" name=\"f\">

        <div class=\"form-check mb-2 mr-sm-2\">

        </div>
        <button type=\"submit\" name=\"twotriangle\" class=\"btn btn-primary mb-2\">Submit</button>
    </form>
</div>
    <center>
    <div class=\"container\">
        <h2>Calculate Diameter for a single circle</h2>
    <button onclick=\"circlePrompt()\" class=\"btn btn-primary mb-2\">Calculate single circle here</button>
        <br><br><hr>
        <h2>Calculate Diameter for a two circle</h2>
        <button onclick=\"twocirclePrompt()\" class=\"btn btn-primary mb-2\">Calculate <two></two>Calculate two circle here</button>
        <br><br><hr>
        <h2>Calculate Surface  Area For single rectangle</h2>
        <button onclick=\"trianglePrompt()\" class=\"btn btn-primary mb-2\">Calculate single Triangle here</button>
        <br><br><hr>
        <h2>Calculate Surface  Area For two rectangle</h2>
        <button onclick=\"twotrianglePrompt()\" class=\"btn btn-primary mb-2\">Calculate two Triangle here</button>
    <script>
        function circlePrompt() {
            let radius = prompt(\"Enter the radius\");
            if (radius !== \"\" && radius != \"null\") {
                window.location.href = \"index.php/circle/\"+radius;
            }
        }

        function twocirclePrompt() {
            let radius = prompt(\"Enter the radius for first circle\");
            if (radius !== \"\" && radius !== null) {
                let radius2 = prompt(\"Enter the radius for second circle\");
                    if (radius2 !== \"\" && radius2 !== null) {
                    window.location.href = \"index.php/doublecircle/\"+radius+\"/\"+radius2;
                    }
            }
        }

        function trianglePrompt() {
            let a = prompt(\"Enter the first side\");
            if (a !== \"\" && a !== null) {
                let b = prompt(\"Enter the second side\");
                if (b !== \"\" && b !== null) {
                    let c = prompt(\"Enter the third side\");

                    if (c !== \"\" && c !== null) {
                        let turl = \"index.php/triangle/\" + a + \"/\" + b + \"/\" + c;
                        window.location.href = turl;
                    }
                }
            }
        }

        function twotrianglePrompt() {
            let a = prompt(\"Enter the first side for first triangle\");
            if (a !== \"\" && a !== null) {
                let b = prompt(\"Enter the second side for first triangle\");
                if (b !== \"\" && b !== null) {
                    let c = prompt(\"Enter the third side for first triangle\");

                    if (c !== \"\" && c !== null) {

                        let d = prompt(\"Enter the first side for second triangle\");
                        if (d !== \"\" && d !== null) {
                            let e = prompt(\"Enter the second side for second triangle\");
                            if (e !== \"\" && e !== null) {
                                let f = prompt(\"Enter the third side for second triangle\");

                                if (f !== \"\" && f !== null) {
                                    let turl = \"index.php/doubletriangle/\" + a + \"/\" + b + \"/\" + c + \"/\" + d + \"/\" + e + \"/\" + f;
                                    window.location.href = turl;
                                }
                            }
                        }

                    }
                }
            }
        }

    </script>
    </div>
    </center>
</body>
</html>", "form.html", "C:\\xampp\\htdocs\\SurfaceCalculator\\templates\\form.html");
    }
}
