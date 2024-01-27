<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>mO'vie Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
                    body .content .php-example code { display: none; }
            </style>

    <script>
        var baseUrl = "http://laitah-server.eddi.cloud:9080";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-4.7.1.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-4.7.1.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;,&quot;php&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                                            <button type="button" class="lang-button" data-language-name="php">php</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-user">
                                <a href="#endpoints-GETapi-user">GET api/user</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-movies">
                                <a href="#endpoints-GETapi-movies">Permet de récupérer la liste complète des films.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-movies">
                                <a href="#endpoints-POSTapi-movies">Permet d'enregistrer un nouveau film.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-movies--id-">
                                <a href="#endpoints-GETapi-movies--id-">Permet de récupérer un film.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-movies--id-">
                                <a href="#endpoints-PUTapi-movies--id-">Permet de mettre à jour un film.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-movies--id-">
                                <a href="#endpoints-DELETEapi-movies--id-">Permet de supprimer un film.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-actors">
                                <a href="#endpoints-GETapi-actors">Permet de récupérer la liste complète des acteurs.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-actors">
                                <a href="#endpoints-POSTapi-actors">Permet d'enregistrer un nouvel acteur.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-actors--id-">
                                <a href="#endpoints-GETapi-actors--id-">Permet de récupérer un acteur.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-actors--id-">
                                <a href="#endpoints-PUTapi-actors--id-">Permet de mettre à jour un acteur.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-actors--id-">
                                <a href="#endpoints-DELETEapi-actors--id-">Permet de supprimer un acteur.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-directors">
                                <a href="#endpoints-GETapi-directors">Permet de récupérer la liste complète des réalisateurs.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-directors">
                                <a href="#endpoints-POSTapi-directors">Permet d'enregistrer un nouveau réalisateur.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-directors--id-">
                                <a href="#endpoints-GETapi-directors--id-">Permet de récupérer un réalisateur.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-directors--id-">
                                <a href="#endpoints-PUTapi-directors--id-">Permet de mettre à jour un réalisateur.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-directors--id-">
                                <a href="#endpoints-DELETEapi-directors--id-">Permet de supprimer un réalisateur.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-movies--movie_id--actors">
                                <a href="#endpoints-GETapi-movies--movie_id--actors">GET api/movies/{movie_id}/actors</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-movies--movie_id--director">
                                <a href="#endpoints-GETapi-movies--movie_id--director">GET api/movies/{movie_id}/director</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-movies--movie_id--actors">
                                <a href="#endpoints-POSTapi-movies--movie_id--actors">POST api/movies/{movie_id}/actors</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-swapi">
                                <a href="#endpoints-GETapi-swapi">GET api/swapi</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                        <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: December 1, 2022</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>Une API REST pour accéder à des milliers de films.</p>
<aside>
    <strong>Base URL</strong>: <code>http://laitah-server.eddi.cloud:9080</code>
</aside>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>To authenticate requests, include an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer {YOUR_AUTH_KEY}"</code></strong>.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-user">GET api/user</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-user">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://laitah-server.eddi.cloud:9080/api/user" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laitah-server.eddi.cloud:9080/api/user"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://laitah-server.eddi.cloud:9080/api/user',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-user">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user"></code></pre>
</span>
<form id="form-GETapi-user" data-method="GET"
      data-path="api/user"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-user"
                    onclick="tryItOut('GETapi-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-user"
                    onclick="cancelTryOut('GETapi-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-user" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/user</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="GETapi-user"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-movies">Permet de récupérer la liste complète des films.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-movies">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://laitah-server.eddi.cloud:9080/api/movies" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laitah-server.eddi.cloud:9080/api/movies"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://laitah-server.eddi.cloud:9080/api/movies',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-movies">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-movies" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-movies"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-movies" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-movies" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-movies"></code></pre>
</span>
<form id="form-GETapi-movies" data-method="GET"
      data-path="api/movies"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-movies', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-movies"
                    onclick="tryItOut('GETapi-movies');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-movies"
                    onclick="cancelTryOut('GETapi-movies');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-movies" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/movies</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="GETapi-movies"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-movies"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-movies"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-movies">Permet d&#039;enregistrer un nouveau film.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-movies">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://laitah-server.eddi.cloud:9080/api/movies" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"xyzrcgushpfyus\",
    \"description\": \"Minima similique est modi veniam quo nostrum et.\",
    \"duration\": 18,
    \"release\": \"2022-12-01\",
    \"director_id\": 15
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laitah-server.eddi.cloud:9080/api/movies"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "xyzrcgushpfyus",
    "description": "Minima similique est modi veniam quo nostrum et.",
    "duration": 18,
    "release": "2022-12-01",
    "director_id": 15
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://laitah-server.eddi.cloud:9080/api/movies',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'xyzrcgushpfyus',
            'description' =&gt; 'Minima similique est modi veniam quo nostrum et.',
            'duration' =&gt; 18,
            'release' =&gt; '2022-12-01',
            'director_id' =&gt; 15,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-movies">
</span>
<span id="execution-results-POSTapi-movies" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-movies"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-movies" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-movies" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-movies"></code></pre>
</span>
<form id="form-POSTapi-movies" data-method="POST"
      data-path="api/movies"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-movies', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-movies"
                    onclick="tryItOut('POSTapi-movies');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-movies"
                    onclick="cancelTryOut('POSTapi-movies');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-movies" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/movies</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="POSTapi-movies"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-movies"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-movies"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="name"                data-endpoint="POSTapi-movies"
               value="xyzrcgushpfyus"
               data-component="body">
    <br>
<p>Le texte de value ne peut pas contenir plus de 255 caractères. Example: <code>xyzrcgushpfyus</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="description"                data-endpoint="POSTapi-movies"
               value="Minima similique est modi veniam quo nostrum et."
               data-component="body">
    <br>
<p>Example: <code>Minima similique est modi veniam quo nostrum et.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>duration</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="duration"                data-endpoint="POSTapi-movies"
               value="18"
               data-component="body">
    <br>
<p>La valeur de value doit être supérieure ou égale à 0. La valeur de value ne peut pas être supérieure à 18000. Example: <code>18</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>release</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="release"                data-endpoint="POSTapi-movies"
               value="2022-12-01"
               data-component="body">
    <br>
<p>5h max. Must be a valid date in the format <code>Y-m-d</code>. Example: <code>2022-12-01</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>director_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               name="director_id"                data-endpoint="POSTapi-movies"
               value="15"
               data-component="body">
    <br>
<p>Example: <code>15</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-movies--id-">Permet de récupérer un film.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-movies--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://laitah-server.eddi.cloud:9080/api/movies/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laitah-server.eddi.cloud:9080/api/movies/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://laitah-server.eddi.cloud:9080/api/movies/1',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-movies--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-movies--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-movies--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-movies--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-movies--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-movies--id-"></code></pre>
</span>
<form id="form-GETapi-movies--id-" data-method="GET"
      data-path="api/movies/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-movies--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-movies--id-"
                    onclick="tryItOut('GETapi-movies--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-movies--id-"
                    onclick="cancelTryOut('GETapi-movies--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-movies--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/movies/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="GETapi-movies--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-movies--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-movies--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="GETapi-movies--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the movie. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-movies--id-">Permet de mettre à jour un film.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-movies--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://laitah-server.eddi.cloud:9080/api/movies/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"ux\",
    \"description\": \"Cum voluptatem earum magni suscipit.\",
    \"duration\": 21,
    \"release\": \"2022-12-01\",
    \"director_id\": 17
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laitah-server.eddi.cloud:9080/api/movies/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "ux",
    "description": "Cum voluptatem earum magni suscipit.",
    "duration": 21,
    "release": "2022-12-01",
    "director_id": 17
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://laitah-server.eddi.cloud:9080/api/movies/1',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'ux',
            'description' =&gt; 'Cum voluptatem earum magni suscipit.',
            'duration' =&gt; 21,
            'release' =&gt; '2022-12-01',
            'director_id' =&gt; 17,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-movies--id-">
</span>
<span id="execution-results-PUTapi-movies--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-movies--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-movies--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-movies--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-movies--id-"></code></pre>
</span>
<form id="form-PUTapi-movies--id-" data-method="PUT"
      data-path="api/movies/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-movies--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-movies--id-"
                    onclick="tryItOut('PUTapi-movies--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-movies--id-"
                    onclick="cancelTryOut('PUTapi-movies--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-movies--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/movies/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/movies/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="PUTapi-movies--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="PUTapi-movies--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="PUTapi-movies--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="PUTapi-movies--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the movie. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="name"                data-endpoint="PUTapi-movies--id-"
               value="ux"
               data-component="body">
    <br>
<p>Le texte de value ne peut pas contenir plus de 255 caractères. Example: <code>ux</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="description"                data-endpoint="PUTapi-movies--id-"
               value="Cum voluptatem earum magni suscipit."
               data-component="body">
    <br>
<p>Example: <code>Cum voluptatem earum magni suscipit.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>duration</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               name="duration"                data-endpoint="PUTapi-movies--id-"
               value="21"
               data-component="body">
    <br>
<p>La valeur de value doit être supérieure ou égale à 0. La valeur de value ne peut pas être supérieure à 18000. Example: <code>21</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>release</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="release"                data-endpoint="PUTapi-movies--id-"
               value="2022-12-01"
               data-component="body">
    <br>
<p>5 heures max. Must be a valid date in the format <code>Y-m-d</code>. Example: <code>2022-12-01</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>director_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               name="director_id"                data-endpoint="PUTapi-movies--id-"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-movies--id-">Permet de supprimer un film.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-movies--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://laitah-server.eddi.cloud:9080/api/movies/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laitah-server.eddi.cloud:9080/api/movies/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://laitah-server.eddi.cloud:9080/api/movies/1',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-movies--id-">
</span>
<span id="execution-results-DELETEapi-movies--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-movies--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-movies--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-movies--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-movies--id-"></code></pre>
</span>
<form id="form-DELETEapi-movies--id-" data-method="DELETE"
      data-path="api/movies/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-movies--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-movies--id-"
                    onclick="tryItOut('DELETEapi-movies--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-movies--id-"
                    onclick="cancelTryOut('DELETEapi-movies--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-movies--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/movies/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="DELETEapi-movies--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="DELETEapi-movies--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="DELETEapi-movies--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="DELETEapi-movies--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the movie. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-actors">Permet de récupérer la liste complète des acteurs.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-actors">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://laitah-server.eddi.cloud:9080/api/actors" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laitah-server.eddi.cloud:9080/api/actors"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://laitah-server.eddi.cloud:9080/api/actors',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-actors">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-actors" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-actors"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-actors" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-actors" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-actors"></code></pre>
</span>
<form id="form-GETapi-actors" data-method="GET"
      data-path="api/actors"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-actors', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-actors"
                    onclick="tryItOut('GETapi-actors');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-actors"
                    onclick="cancelTryOut('GETapi-actors');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-actors" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/actors</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="GETapi-actors"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-actors"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-actors"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-actors">Permet d&#039;enregistrer un nouvel acteur.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-actors">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://laitah-server.eddi.cloud:9080/api/actors" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"wpg\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laitah-server.eddi.cloud:9080/api/actors"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "wpg"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://laitah-server.eddi.cloud:9080/api/actors',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'wpg',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-actors">
</span>
<span id="execution-results-POSTapi-actors" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-actors"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-actors" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-actors" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-actors"></code></pre>
</span>
<form id="form-POSTapi-actors" data-method="POST"
      data-path="api/actors"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-actors', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-actors"
                    onclick="tryItOut('POSTapi-actors');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-actors"
                    onclick="cancelTryOut('POSTapi-actors');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-actors" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/actors</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="POSTapi-actors"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-actors"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-actors"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="name"                data-endpoint="POSTapi-actors"
               value="wpg"
               data-component="body">
    <br>
<p>Le texte de value ne peut pas contenir plus de 255 caractères. Example: <code>wpg</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-actors--id-">Permet de récupérer un acteur.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-actors--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://laitah-server.eddi.cloud:9080/api/actors/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laitah-server.eddi.cloud:9080/api/actors/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://laitah-server.eddi.cloud:9080/api/actors/1',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-actors--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-actors--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-actors--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-actors--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-actors--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-actors--id-"></code></pre>
</span>
<form id="form-GETapi-actors--id-" data-method="GET"
      data-path="api/actors/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-actors--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-actors--id-"
                    onclick="tryItOut('GETapi-actors--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-actors--id-"
                    onclick="cancelTryOut('GETapi-actors--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-actors--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/actors/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="GETapi-actors--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-actors--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-actors--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="GETapi-actors--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the actor. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-actors--id-">Permet de mettre à jour un acteur.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-actors--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://laitah-server.eddi.cloud:9080/api/actors/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"hhzvgmzlasorszsuzudbzn\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laitah-server.eddi.cloud:9080/api/actors/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "hhzvgmzlasorszsuzudbzn"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://laitah-server.eddi.cloud:9080/api/actors/1',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'hhzvgmzlasorszsuzudbzn',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-actors--id-">
</span>
<span id="execution-results-PUTapi-actors--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-actors--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-actors--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-actors--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-actors--id-"></code></pre>
</span>
<form id="form-PUTapi-actors--id-" data-method="PUT"
      data-path="api/actors/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-actors--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-actors--id-"
                    onclick="tryItOut('PUTapi-actors--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-actors--id-"
                    onclick="cancelTryOut('PUTapi-actors--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-actors--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/actors/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/actors/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="PUTapi-actors--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="PUTapi-actors--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="PUTapi-actors--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="PUTapi-actors--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the actor. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="name"                data-endpoint="PUTapi-actors--id-"
               value="hhzvgmzlasorszsuzudbzn"
               data-component="body">
    <br>
<p>Le texte de value ne peut pas contenir plus de 255 caractères. Example: <code>hhzvgmzlasorszsuzudbzn</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-actors--id-">Permet de supprimer un acteur.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-actors--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://laitah-server.eddi.cloud:9080/api/actors/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laitah-server.eddi.cloud:9080/api/actors/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://laitah-server.eddi.cloud:9080/api/actors/1',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-actors--id-">
</span>
<span id="execution-results-DELETEapi-actors--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-actors--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-actors--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-actors--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-actors--id-"></code></pre>
</span>
<form id="form-DELETEapi-actors--id-" data-method="DELETE"
      data-path="api/actors/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-actors--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-actors--id-"
                    onclick="tryItOut('DELETEapi-actors--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-actors--id-"
                    onclick="cancelTryOut('DELETEapi-actors--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-actors--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/actors/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="DELETEapi-actors--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="DELETEapi-actors--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="DELETEapi-actors--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="DELETEapi-actors--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the actor. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-directors">Permet de récupérer la liste complète des réalisateurs.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-directors">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://laitah-server.eddi.cloud:9080/api/directors" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laitah-server.eddi.cloud:9080/api/directors"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://laitah-server.eddi.cloud:9080/api/directors',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-directors">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-directors" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-directors"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-directors" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-directors" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-directors"></code></pre>
</span>
<form id="form-GETapi-directors" data-method="GET"
      data-path="api/directors"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-directors', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-directors"
                    onclick="tryItOut('GETapi-directors');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-directors"
                    onclick="cancelTryOut('GETapi-directors');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-directors" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/directors</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="GETapi-directors"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-directors"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-directors"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-directors">Permet d&#039;enregistrer un nouveau réalisateur.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-directors">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://laitah-server.eddi.cloud:9080/api/directors" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"fhnvvcpqqvhiabojnqfv\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laitah-server.eddi.cloud:9080/api/directors"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "fhnvvcpqqvhiabojnqfv"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://laitah-server.eddi.cloud:9080/api/directors',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'fhnvvcpqqvhiabojnqfv',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-directors">
</span>
<span id="execution-results-POSTapi-directors" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-directors"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-directors" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-directors" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-directors"></code></pre>
</span>
<form id="form-POSTapi-directors" data-method="POST"
      data-path="api/directors"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-directors', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-directors"
                    onclick="tryItOut('POSTapi-directors');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-directors"
                    onclick="cancelTryOut('POSTapi-directors');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-directors" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/directors</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="POSTapi-directors"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-directors"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-directors"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="name"                data-endpoint="POSTapi-directors"
               value="fhnvvcpqqvhiabojnqfv"
               data-component="body">
    <br>
<p>Le texte de value ne peut pas contenir plus de 255 caractères. Example: <code>fhnvvcpqqvhiabojnqfv</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-directors--id-">Permet de récupérer un réalisateur.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-directors--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://laitah-server.eddi.cloud:9080/api/directors/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laitah-server.eddi.cloud:9080/api/directors/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://laitah-server.eddi.cloud:9080/api/directors/1',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-directors--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-directors--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-directors--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-directors--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-directors--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-directors--id-"></code></pre>
</span>
<form id="form-GETapi-directors--id-" data-method="GET"
      data-path="api/directors/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-directors--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-directors--id-"
                    onclick="tryItOut('GETapi-directors--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-directors--id-"
                    onclick="cancelTryOut('GETapi-directors--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-directors--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/directors/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="GETapi-directors--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-directors--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-directors--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="GETapi-directors--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the director. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-directors--id-">Permet de mettre à jour un réalisateur.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-directors--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://laitah-server.eddi.cloud:9080/api/directors/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"dkeizzfmd\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laitah-server.eddi.cloud:9080/api/directors/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "dkeizzfmd"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://laitah-server.eddi.cloud:9080/api/directors/1',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'dkeizzfmd',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-directors--id-">
</span>
<span id="execution-results-PUTapi-directors--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-directors--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-directors--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-directors--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-directors--id-"></code></pre>
</span>
<form id="form-PUTapi-directors--id-" data-method="PUT"
      data-path="api/directors/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-directors--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-directors--id-"
                    onclick="tryItOut('PUTapi-directors--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-directors--id-"
                    onclick="cancelTryOut('PUTapi-directors--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-directors--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/directors/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/directors/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="PUTapi-directors--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="PUTapi-directors--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="PUTapi-directors--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="PUTapi-directors--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the director. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="name"                data-endpoint="PUTapi-directors--id-"
               value="dkeizzfmd"
               data-component="body">
    <br>
<p>Le texte de value ne peut pas contenir plus de 255 caractères. Example: <code>dkeizzfmd</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-directors--id-">Permet de supprimer un réalisateur.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-directors--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://laitah-server.eddi.cloud:9080/api/directors/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laitah-server.eddi.cloud:9080/api/directors/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://laitah-server.eddi.cloud:9080/api/directors/1',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-directors--id-">
</span>
<span id="execution-results-DELETEapi-directors--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-directors--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-directors--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-directors--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-directors--id-"></code></pre>
</span>
<form id="form-DELETEapi-directors--id-" data-method="DELETE"
      data-path="api/directors/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-directors--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-directors--id-"
                    onclick="tryItOut('DELETEapi-directors--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-directors--id-"
                    onclick="cancelTryOut('DELETEapi-directors--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-directors--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/directors/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="DELETEapi-directors--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="DELETEapi-directors--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="DELETEapi-directors--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="DELETEapi-directors--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the director. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-movies--movie_id--actors">GET api/movies/{movie_id}/actors</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-movies--movie_id--actors">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://laitah-server.eddi.cloud:9080/api/movies/1/actors" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laitah-server.eddi.cloud:9080/api/movies/1/actors"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://laitah-server.eddi.cloud:9080/api/movies/1/actors',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-movies--movie_id--actors">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-movies--movie_id--actors" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-movies--movie_id--actors"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-movies--movie_id--actors" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-movies--movie_id--actors" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-movies--movie_id--actors"></code></pre>
</span>
<form id="form-GETapi-movies--movie_id--actors" data-method="GET"
      data-path="api/movies/{movie_id}/actors"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-movies--movie_id--actors', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-movies--movie_id--actors"
                    onclick="tryItOut('GETapi-movies--movie_id--actors');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-movies--movie_id--actors"
                    onclick="cancelTryOut('GETapi-movies--movie_id--actors');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-movies--movie_id--actors" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/movies/{movie_id}/actors</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="GETapi-movies--movie_id--actors"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-movies--movie_id--actors"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-movies--movie_id--actors"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>movie_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="movie_id"                data-endpoint="GETapi-movies--movie_id--actors"
               value="1"
               data-component="url">
    <br>
<p>The ID of the movie. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-movies--movie_id--director">GET api/movies/{movie_id}/director</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-movies--movie_id--director">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://laitah-server.eddi.cloud:9080/api/movies/1/director" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laitah-server.eddi.cloud:9080/api/movies/1/director"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://laitah-server.eddi.cloud:9080/api/movies/1/director',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-movies--movie_id--director">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-movies--movie_id--director" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-movies--movie_id--director"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-movies--movie_id--director" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-movies--movie_id--director" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-movies--movie_id--director"></code></pre>
</span>
<form id="form-GETapi-movies--movie_id--director" data-method="GET"
      data-path="api/movies/{movie_id}/director"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-movies--movie_id--director', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-movies--movie_id--director"
                    onclick="tryItOut('GETapi-movies--movie_id--director');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-movies--movie_id--director"
                    onclick="cancelTryOut('GETapi-movies--movie_id--director');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-movies--movie_id--director" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/movies/{movie_id}/director</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="GETapi-movies--movie_id--director"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-movies--movie_id--director"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-movies--movie_id--director"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>movie_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="movie_id"                data-endpoint="GETapi-movies--movie_id--director"
               value="1"
               data-component="url">
    <br>
<p>The ID of the movie. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-movies--movie_id--actors">POST api/movies/{movie_id}/actors</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-movies--movie_id--actors">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://laitah-server.eddi.cloud:9080/api/movies/1/actors" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"actor_id\": 13
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laitah-server.eddi.cloud:9080/api/movies/1/actors"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "actor_id": 13
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://laitah-server.eddi.cloud:9080/api/movies/1/actors',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'actor_id' =&gt; 13,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-movies--movie_id--actors">
</span>
<span id="execution-results-POSTapi-movies--movie_id--actors" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-movies--movie_id--actors"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-movies--movie_id--actors" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-movies--movie_id--actors" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-movies--movie_id--actors"></code></pre>
</span>
<form id="form-POSTapi-movies--movie_id--actors" data-method="POST"
      data-path="api/movies/{movie_id}/actors"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-movies--movie_id--actors', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-movies--movie_id--actors"
                    onclick="tryItOut('POSTapi-movies--movie_id--actors');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-movies--movie_id--actors"
                    onclick="cancelTryOut('POSTapi-movies--movie_id--actors');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-movies--movie_id--actors" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/movies/{movie_id}/actors</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="POSTapi-movies--movie_id--actors"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-movies--movie_id--actors"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-movies--movie_id--actors"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>movie_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="movie_id"                data-endpoint="POSTapi-movies--movie_id--actors"
               value="1"
               data-component="url">
    <br>
<p>The ID of the movie. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>actor_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="actor_id"                data-endpoint="POSTapi-movies--movie_id--actors"
               value="13"
               data-component="body">
    <br>
<p>Example: <code>13</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-swapi">GET api/swapi</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-swapi">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://laitah-server.eddi.cloud:9080/api/swapi" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laitah-server.eddi.cloud:9080/api/swapi"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://laitah-server.eddi.cloud:9080/api/swapi',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-swapi">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;oaoohuwhao&quot;: 36,
    &quot;whwokao&quot;: &quot;acaoaoakc://cohraakah.wawoho/raakah/caorarccacahakc/?akrarrwo=3&amp;wwoorcscraao=ohooooorahwowo&quot;,
    &quot;akrcwohoahoohuc&quot;: &quot;acaoaoakc://cohraakah.wawoho/raakah/caorarccacahakc/?akrarrwo=1&amp;wwoorcscraao=ohooooorahwowo&quot;,
    &quot;rcwochuanaoc&quot;: [
        {
            &quot;whrascwo&quot;: &quot;Sanrahowo 1&quot;,
            &quot;scoowawoan&quot;: &quot;Fahrcwocakrcraro-31-oaanracc akraaorcooan rawhwa raaoaoraoaor&quot;,
            &quot;scrawhhuwwraoaaohurcworc&quot;: &quot;Khuraao Srocaowoscc Ewhrrahwhwoworcahwhrr&quot;,
            &quot;oaoocao_ahwh_oarcwowaahaoc&quot;: &quot;huwhorwhooohwh&quot;,
            &quot;anwowhrraoac&quot;: &quot;21.5&quot;,
            &quot;scrak_raaoscoocakacworcahwhrr_cakwowowa&quot;: &quot;1000&quot;,
            &quot;oarcwooh&quot;: &quot;1&quot;,
            &quot;akraccwowhrrworcc&quot;: &quot;6&quot;,
            &quot;oararcrroo_oaraakraoaahaoro&quot;: &quot;70000&quot;,
            &quot;oaoowhchuscrarhanwoc&quot;: &quot;1 scoowhaoac&quot;,
            &quot;acroakworcwarcahhowo_rcraaoahwhrr&quot;: &quot;3.0&quot;,
            &quot;MGLT&quot;: &quot;70&quot;,
            &quot;caorarccacahak_oaanracc&quot;: &quot;Praaorcooan oarcrawwao&quot;,
            &quot;akahanooaoc&quot;: [
                &quot;acaoaoakc://cohraakah.wawoho/raakah/akwoooakanwo/22/&quot;
            ],
            &quot;wwahanscc&quot;: [
                &quot;acaoaoakc://cohraakah.wawoho/raakah/wwahanscc/2/&quot;,
                &quot;acaoaoakc://cohraakah.wawoho/raakah/wwahanscc/5/&quot;
            ],
            &quot;oarcworaaowowa&quot;: &quot;2014-12-15T13:00:56.332000Z&quot;,
            &quot;wowaahaowowa&quot;: &quot;2014-12-20T21:23:49.897000Z&quot;,
            &quot;hurcan&quot;: &quot;acaoaoakc://cohraakah.wawoho/raakah/caorarccacahakc/21/&quot;
        },
        {
            &quot;whrascwo&quot;: &quot;Iscakworcahraan cachuaoaoanwo&quot;,
            &quot;scoowawoan&quot;: &quot;Lrascrhwara-oaanracc T-4ra cachuaoaoanwo&quot;,
            &quot;scrawhhuwwraoaaohurcworc&quot;: &quot;Sahwowhrarc Fanwowoao Srocaowoscc&quot;,
            &quot;oaoocao_ahwh_oarcwowaahaoc&quot;: &quot;240000&quot;,
            &quot;anwowhrraoac&quot;: &quot;20&quot;,
            &quot;scrak_raaoscoocakacworcahwhrr_cakwowowa&quot;: &quot;850&quot;,
            &quot;oarcwooh&quot;: &quot;6&quot;,
            &quot;akraccwowhrrworcc&quot;: &quot;20&quot;,
            &quot;oararcrroo_oaraakraoaahaoro&quot;: &quot;80000&quot;,
            &quot;oaoowhchuscrarhanwoc&quot;: &quot;2 scoowhaoacc&quot;,
            &quot;acroakworcwarcahhowo_rcraaoahwhrr&quot;: &quot;1.0&quot;,
            &quot;MGLT&quot;: &quot;50&quot;,
            &quot;caorarccacahak_oaanracc&quot;: &quot;Arcscwowa rroohoworcwhscwowhao aorcrawhcakoorcao&quot;,
            &quot;akahanooaoc&quot;: [
                &quot;acaoaoakc://cohraakah.wawoho/raakah/akwoooakanwo/1/&quot;,
                &quot;acaoaoakc://cohraakah.wawoho/raakah/akwoooakanwo/13/&quot;,
                &quot;acaoaoakc://cohraakah.wawoho/raakah/akwoooakanwo/14/&quot;
            ],
            &quot;wwahanscc&quot;: [
                &quot;acaoaoakc://cohraakah.wawoho/raakah/wwahanscc/2/&quot;,
                &quot;acaoaoakc://cohraakah.wawoho/raakah/wwahanscc/3/&quot;
            ],
            &quot;oarcworaaowowa&quot;: &quot;2014-12-15T13:04:47.235000Z&quot;,
            &quot;wowaahaowowa&quot;: &quot;2014-12-20T21:23:49.900000Z&quot;,
            &quot;hurcan&quot;: &quot;acaoaoakc://cohraakah.wawoho/raakah/caorarccacahakc/22/&quot;
        },
        {
            &quot;whrascwo&quot;: &quot;EF76 Nworhhuanoowh-B wocoaoorcao wwrcahrrraaowo&quot;,
            &quot;scoowawoan&quot;: &quot;EF76 Nworhhuanoowh-B wocoaoorcao wwrcahrrraaowo&quot;,
            &quot;scrawhhuwwraoaaohurcworc&quot;: &quot;Khuraao Drcahhowo Yrarcwac&quot;,
            &quot;oaoocao_ahwh_oarcwowaahaoc&quot;: &quot;8500000&quot;,
            &quot;anwowhrraoac&quot;: &quot;300&quot;,
            &quot;scrak_raaoscoocakacworcahwhrr_cakwowowa&quot;: &quot;800&quot;,
            &quot;oarcwooh&quot;: &quot;854&quot;,
            &quot;akraccwowhrrworcc&quot;: &quot;75&quot;,
            &quot;oararcrroo_oaraakraoaahaoro&quot;: &quot;6000000&quot;,
            &quot;oaoowhchuscrarhanwoc&quot;: &quot;2 roworarcc&quot;,
            &quot;acroakworcwarcahhowo_rcraaoahwhrr&quot;: &quot;2.0&quot;,
            &quot;MGLT&quot;: &quot;40&quot;,
            &quot;caorarccacahak_oaanracc&quot;: &quot;Ecoaoorcao cacahak&quot;,
            &quot;akahanooaoc&quot;: [],
            &quot;wwahanscc&quot;: [
                &quot;acaoaoakc://cohraakah.wawoho/raakah/wwahanscc/2/&quot;,
                &quot;acaoaoakc://cohraakah.wawoho/raakah/wwahanscc/3/&quot;
            ],
            &quot;oarcworaaowowa&quot;: &quot;2014-12-15T13:06:30.813000Z&quot;,
            &quot;wowaahaowowa&quot;: &quot;2014-12-20T21:23:49.902000Z&quot;,
            &quot;hurcan&quot;: &quot;acaoaoakc://cohraakah.wawoho/raakah/caorarccacahakc/23/&quot;
        },
        {
            &quot;whrascwo&quot;: &quot;Craanrascrarcah Crchuahcworc&quot;,
            &quot;scoowawoan&quot;: &quot;MC80 Lahrhworcaoro aoroakwo Saorarc Crchuahcworc&quot;,
            &quot;scrawhhuwwraoaaohurcworc&quot;: &quot;Moowh Craanrascrarcah cacahakrorarcwac&quot;,
            &quot;oaoocao_ahwh_oarcwowaahaoc&quot;: &quot;104000000&quot;,
            &quot;anwowhrraoac&quot;: &quot;1200&quot;,
            &quot;scrak_raaoscoocakacworcahwhrr_cakwowowa&quot;: &quot;wh/ra&quot;,
            &quot;oarcwooh&quot;: &quot;5400&quot;,
            &quot;akraccwowhrrworcc&quot;: &quot;1200&quot;,
            &quot;oararcrroo_oaraakraoaahaoro&quot;: &quot;huwhorwhooohwh&quot;,
            &quot;oaoowhchuscrarhanwoc&quot;: &quot;2 roworarcc&quot;,
            &quot;acroakworcwarcahhowo_rcraaoahwhrr&quot;: &quot;1.0&quot;,
            &quot;MGLT&quot;: &quot;60&quot;,
            &quot;caorarccacahak_oaanracc&quot;: &quot;Saorarc Crchuahcworc&quot;,
            &quot;akahanooaoc&quot;: [],
            &quot;wwahanscc&quot;: [
                &quot;acaoaoakc://cohraakah.wawoho/raakah/wwahanscc/3/&quot;
            ],
            &quot;oarcworaaowowa&quot;: &quot;2014-12-18T10:54:57.804000Z&quot;,
            &quot;wowaahaowowa&quot;: &quot;2014-12-20T21:23:49.904000Z&quot;,
            &quot;hurcan&quot;: &quot;acaoaoakc://cohraakah.wawoho/raakah/caorarccacahakc/27/&quot;
        },
        {
            &quot;whrascwo&quot;: &quot;A-ohahwhrr&quot;,
            &quot;scoowawoan&quot;: &quot;RZ-1 A-ohahwhrr Iwhaoworcoawoakaooorc&quot;,
            &quot;scrawhhuwwraoaaohurcworc&quot;: &quot;Aananahrawhoawo Uwhwaworcrrrcoohuwhwa Ewhrrahwhwoworcahwhrr, Iwhoaoosc Coorcakoorcraaoahoowh&quot;,
            &quot;oaoocao_ahwh_oarcwowaahaoc&quot;: &quot;175000&quot;,
            &quot;anwowhrraoac&quot;: &quot;9.6&quot;,
            &quot;scrak_raaoscoocakacworcahwhrr_cakwowowa&quot;: &quot;1300&quot;,
            &quot;oarcwooh&quot;: &quot;1&quot;,
            &quot;akraccwowhrrworcc&quot;: &quot;0&quot;,
            &quot;oararcrroo_oaraakraoaahaoro&quot;: &quot;40&quot;,
            &quot;oaoowhchuscrarhanwoc&quot;: &quot;1 ohwowoor&quot;,
            &quot;acroakworcwarcahhowo_rcraaoahwhrr&quot;: &quot;1.0&quot;,
            &quot;MGLT&quot;: &quot;120&quot;,
            &quot;caorarccacahak_oaanracc&quot;: &quot;Saorarcwwahrracaoworc&quot;,
            &quot;akahanooaoc&quot;: [
                &quot;acaoaoakc://cohraakah.wawoho/raakah/akwoooakanwo/29/&quot;
            ],
            &quot;wwahanscc&quot;: [
                &quot;acaoaoakc://cohraakah.wawoho/raakah/wwahanscc/3/&quot;
            ],
            &quot;oarcworaaowowa&quot;: &quot;2014-12-18T11:16:34.542000Z&quot;,
            &quot;wowaahaowowa&quot;: &quot;2014-12-20T21:23:49.907000Z&quot;,
            &quot;hurcan&quot;: &quot;acaoaoakc://cohraakah.wawoho/raakah/caorarccacahakc/28/&quot;
        },
        {
            &quot;whrascwo&quot;: &quot;B-ohahwhrr&quot;,
            &quot;scoowawoan&quot;: &quot;A/SF-01 B-ohahwhrr caorarcwwahrracaoworc&quot;,
            &quot;scrawhhuwwraoaaohurcworc&quot;: &quot;Sanrarowh &amp; Koorcakahan&quot;,
            &quot;oaoocao_ahwh_oarcwowaahaoc&quot;: &quot;220000&quot;,
            &quot;anwowhrraoac&quot;: &quot;16.9&quot;,
            &quot;scrak_raaoscoocakacworcahwhrr_cakwowowa&quot;: &quot;950&quot;,
            &quot;oarcwooh&quot;: &quot;1&quot;,
            &quot;akraccwowhrrworcc&quot;: &quot;0&quot;,
            &quot;oararcrroo_oaraakraoaahaoro&quot;: &quot;45&quot;,
            &quot;oaoowhchuscrarhanwoc&quot;: &quot;1 ohwowoor&quot;,
            &quot;acroakworcwarcahhowo_rcraaoahwhrr&quot;: &quot;2.0&quot;,
            &quot;MGLT&quot;: &quot;91&quot;,
            &quot;caorarccacahak_oaanracc&quot;: &quot;Accrahuanao Saorarcwwahrracaoworc&quot;,
            &quot;akahanooaoc&quot;: [],
            &quot;wwahanscc&quot;: [
                &quot;acaoaoakc://cohraakah.wawoho/raakah/wwahanscc/3/&quot;
            ],
            &quot;oarcworaaowowa&quot;: &quot;2014-12-18T11:18:04.763000Z&quot;,
            &quot;wowaahaowowa&quot;: &quot;2014-12-20T21:23:49.909000Z&quot;,
            &quot;hurcan&quot;: &quot;acaoaoakc://cohraakah.wawoho/raakah/caorarccacahakc/29/&quot;
        },
        {
            &quot;whrascwo&quot;: &quot;Rwoakhurhanahoa Crchuahcworc&quot;,
            &quot;scoowawoan&quot;: &quot;Coowhchuanrarc-oaanracc oarchuahcworc&quot;,
            &quot;scrawhhuwwraoaaohurcworc&quot;: &quot;Coorcwoananahrawh Ewhrrahwhwoworcahwhrr Coorcakoorcraaoahoowh&quot;,
            &quot;oaoocao_ahwh_oarcwowaahaoc&quot;: &quot;huwhorwhooohwh&quot;,
            &quot;anwowhrraoac&quot;: &quot;115&quot;,
            &quot;scrak_raaoscoocakacworcahwhrr_cakwowowa&quot;: &quot;900&quot;,
            &quot;oarcwooh&quot;: &quot;9&quot;,
            &quot;akraccwowhrrworcc&quot;: &quot;16&quot;,
            &quot;oararcrroo_oaraakraoaahaoro&quot;: &quot;huwhorwhooohwh&quot;,
            &quot;oaoowhchuscrarhanwoc&quot;: &quot;huwhorwhooohwh&quot;,
            &quot;acroakworcwarcahhowo_rcraaoahwhrr&quot;: &quot;2.0&quot;,
            &quot;MGLT&quot;: &quot;huwhorwhooohwh&quot;,
            &quot;caorarccacahak_oaanracc&quot;: &quot;Sakraoawo oarchuahcworc&quot;,
            &quot;akahanooaoc&quot;: [],
            &quot;wwahanscc&quot;: [
                &quot;acaoaoakc://cohraakah.wawoho/raakah/wwahanscc/4/&quot;
            ],
            &quot;oarcworaaowowa&quot;: &quot;2014-12-19T17:01:31.488000Z&quot;,
            &quot;wowaahaowowa&quot;: &quot;2014-12-20T21:23:49.912000Z&quot;,
            &quot;hurcan&quot;: &quot;acaoaoakc://cohraakah.wawoho/raakah/caorarccacahakc/31/&quot;
        },
        {
            &quot;whrascwo&quot;: &quot;Drcooahwa oaoowhaorcooan cacahak&quot;,
            &quot;scoowawoan&quot;: &quot;Lhuoarcwoachuanor-oaanracc Drcooahwa Coowhaorcooan Sacahak&quot;,
            &quot;scrawhhuwwraoaaohurcworc&quot;: &quot;Hooworccoaac-Kwoccwoan Drcahhowo, Iwhoa.&quot;,
            &quot;oaoocao_ahwh_oarcwowaahaoc&quot;: &quot;huwhorwhooohwh&quot;,
            &quot;anwowhrraoac&quot;: &quot;3170&quot;,
            &quot;scrak_raaoscoocakacworcahwhrr_cakwowowa&quot;: &quot;wh/ra&quot;,
            &quot;oarcwooh&quot;: &quot;175&quot;,
            &quot;akraccwowhrrworcc&quot;: &quot;139000&quot;,
            &quot;oararcrroo_oaraakraoaahaoro&quot;: &quot;4000000000&quot;,
            &quot;oaoowhchuscrarhanwoc&quot;: &quot;500 wararoc&quot;,
            &quot;acroakworcwarcahhowo_rcraaoahwhrr&quot;: &quot;2.0&quot;,
            &quot;MGLT&quot;: &quot;huwhorwhooohwh&quot;,
            &quot;caorarccacahak_oaanracc&quot;: &quot;Drcooahwa oaoowhaorcooan cacahak&quot;,
            &quot;akahanooaoc&quot;: [],
            &quot;wwahanscc&quot;: [
                &quot;acaoaoakc://cohraakah.wawoho/raakah/wwahanscc/4/&quot;,
                &quot;acaoaoakc://cohraakah.wawoho/raakah/wwahanscc/5/&quot;,
                &quot;acaoaoakc://cohraakah.wawoho/raakah/wwahanscc/6/&quot;
            ],
            &quot;oarcworaaowowa&quot;: &quot;2014-12-19T17:04:06.323000Z&quot;,
            &quot;wowaahaowowa&quot;: &quot;2014-12-20T21:23:49.915000Z&quot;,
            &quot;hurcan&quot;: &quot;acaoaoakc://cohraakah.wawoho/raakah/caorarccacahakc/32/&quot;
        },
        {
            &quot;whrascwo&quot;: &quot;Nrarhoooo wwahrracaoworc&quot;,
            &quot;scoowawoan&quot;: &quot;N-1 caorarcwwahrracaoworc&quot;,
            &quot;scrawhhuwwraoaaohurcworc&quot;: &quot;Tacwowowa Praanraoawo Sakraoawo Vwoccwoan Ewhrrahwhwoworcahwhrr Coorcakc&quot;,
            &quot;oaoocao_ahwh_oarcwowaahaoc&quot;: &quot;200000&quot;,
            &quot;anwowhrraoac&quot;: &quot;11&quot;,
            &quot;scrak_raaoscoocakacworcahwhrr_cakwowowa&quot;: &quot;1100&quot;,
            &quot;oarcwooh&quot;: &quot;1&quot;,
            &quot;akraccwowhrrworcc&quot;: &quot;0&quot;,
            &quot;oararcrroo_oaraakraoaahaoro&quot;: &quot;65&quot;,
            &quot;oaoowhchuscrarhanwoc&quot;: &quot;7 wararoc&quot;,
            &quot;acroakworcwarcahhowo_rcraaoahwhrr&quot;: &quot;1.0&quot;,
            &quot;MGLT&quot;: &quot;huwhorwhooohwh&quot;,
            &quot;caorarccacahak_oaanracc&quot;: &quot;Saorarcwwahrracaoworc&quot;,
            &quot;akahanooaoc&quot;: [
                &quot;acaoaoakc://cohraakah.wawoho/raakah/akwoooakanwo/11/&quot;,
                &quot;acaoaoakc://cohraakah.wawoho/raakah/akwoooakanwo/35/&quot;,
                &quot;acaoaoakc://cohraakah.wawoho/raakah/akwoooakanwo/60/&quot;
            ],
            &quot;wwahanscc&quot;: [
                &quot;acaoaoakc://cohraakah.wawoho/raakah/wwahanscc/4/&quot;,
                &quot;acaoaoakc://cohraakah.wawoho/raakah/wwahanscc/5/&quot;
            ],
            &quot;oarcworaaowowa&quot;: &quot;2014-12-19T17:39:17.582000Z&quot;,
            &quot;wowaahaowowa&quot;: &quot;2014-12-20T21:23:49.917000Z&quot;,
            &quot;hurcan&quot;: &quot;acaoaoakc://cohraakah.wawoho/raakah/caorarccacahakc/39/&quot;
        },
        {
            &quot;whrascwo&quot;: &quot;Nrarhoooo Roororaan Saorarccacahak&quot;,
            &quot;scoowawoan&quot;: &quot;J-aoroakwo 327 Nhurhahrawh rcoororaan caorarccacahak&quot;,
            &quot;scrawhhuwwraoaaohurcworc&quot;: &quot;Tacwowowa Praanraoawo Sakraoawo Vwoccwoan Ewhrrahwhwoworcahwhrr Coorcakc, Nhurhahra Saorarc Drcahhowoc&quot;,
            &quot;oaoocao_ahwh_oarcwowaahaoc&quot;: &quot;huwhorwhooohwh&quot;,
            &quot;anwowhrraoac&quot;: &quot;76&quot;,
            &quot;scrak_raaoscoocakacworcahwhrr_cakwowowa&quot;: &quot;920&quot;,
            &quot;oarcwooh&quot;: &quot;8&quot;,
            &quot;akraccwowhrrworcc&quot;: &quot;huwhorwhooohwh&quot;,
            &quot;oararcrroo_oaraakraoaahaoro&quot;: &quot;huwhorwhooohwh&quot;,
            &quot;oaoowhchuscrarhanwoc&quot;: &quot;huwhorwhooohwh&quot;,
            &quot;acroakworcwarcahhowo_rcraaoahwhrr&quot;: &quot;1.8&quot;,
            &quot;MGLT&quot;: &quot;huwhorwhooohwh&quot;,
            &quot;caorarccacahak_oaanracc&quot;: &quot;roraoaacao&quot;,
            &quot;akahanooaoc&quot;: [
                &quot;acaoaoakc://cohraakah.wawoho/raakah/akwoooakanwo/39/&quot;
            ],
            &quot;wwahanscc&quot;: [
                &quot;acaoaoakc://cohraakah.wawoho/raakah/wwahanscc/4/&quot;
            ],
            &quot;oarcworaaowowa&quot;: &quot;2014-12-19T17:45:03.506000Z&quot;,
            &quot;wowaahaowowa&quot;: &quot;2014-12-20T21:23:49.919000Z&quot;,
            &quot;hurcan&quot;: &quot;acaoaoakc://cohraakah.wawoho/raakah/caorarccacahakc/40/&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-swapi" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-swapi"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-swapi" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-swapi" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-swapi"></code></pre>
</span>
<form id="form-GETapi-swapi" data-method="GET"
      data-path="api/swapi"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-swapi', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-swapi"
                    onclick="tryItOut('GETapi-swapi');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-swapi"
                    onclick="cancelTryOut('GETapi-swapi');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-swapi" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/swapi</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="GETapi-swapi"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-swapi"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-swapi"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                                                        <button type="button" class="lang-button" data-language-name="php">php</button>
                            </div>
            </div>
</div>
</body>
</html>
