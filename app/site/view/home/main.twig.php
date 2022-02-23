<h1>ESTAMOS NA VIEW MAIN</h1>
<h2> {{ titulo }} </h2>

<ol>
    {% for produto in produtos %}
        <li> {{ produto }} </li>
    {% endfor %}

</ol>