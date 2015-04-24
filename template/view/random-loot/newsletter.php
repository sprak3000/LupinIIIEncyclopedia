<?php /** Content Part */ ?>
<div class="container">

  <div class="row blog-page">

    <div class="col-md-3">

      <div class="posts">

        <div class="headline headline-md">
          <h2>Issues</h2>
        </div>

        <dl class="dl-horizontal">
          <dt>2002</dt>
          <dd>
            <p><a href="/random-loot/newsletter/2002/12">December</a></p>
          </dd>
        </dl>
        <dl class="dl-horizontal">
          <dt>2003</dt>
          <dd>
            <p><a href="/random-loot/newsletter/2003/01">January</a></p>
            <p><a href="/random-loot/newsletter/2003/02">February</a></p>
            <p><a href="/random-loot/newsletter/2003/03">March</a></p>
            <p><a href="/random-loot/newsletter/2003/04">April</a></p>
            <p><a href="/random-loot/newsletter/2003/05">May</a></p>
            <p><a href="/random-loot/newsletter/2003/06">June</a></p>
            <p><a href="/random-loot/newsletter/2003/07">July</a></p>
            <p><a href="/random-loot/newsletter/2003/08">August</a></p>
            <p><a href="/random-loot/newsletter/2003/09">September</a></p>
            <p><a href="/random-loot/newsletter/2003/10">October</a></p>
            <p><a href="/random-loot/newsletter/2003/11">November</a></p>
            <p><a href="/random-loot/newsletter/2003/12">December</a></p>
          </dd>
        </dl>
        <dl class="dl-horizontal">
          <dt>2004</dt>
          <dd>
            <p><a href="/random-loot/newsletter/2004/01">January</a></p>
            <p><a href="/random-loot/newsletter/2004/02">February</a></p>
            <p><a href="/random-loot/newsletter/2004/03">March</a></p>
            <p><a href="/random-loot/newsletter/2004/07">July</a></p>
          </dd>
        </dl>

      </div>

    </div>

    <div class="col-md-9">

      <div id="newsletter-content" data-issue="<?php echo $year . '-' . $month; ?>">

        <div class="headline">
          <h3><?php echo $issue; ?></h3>
        </div>

        <script id="newsletter-section-template" type="text/x-handlebars-template">
          {{#each section}}
            {{#if title}}
            <div class="headline">
              <h4>{{{title}}}</h4>
            </div>
            {{/if}}
            {{{content}}}
            {{#if links}}
            <dl>
              <dt>Related Links</dt>
              {{#each links}}
              <dd>{{#if expired}}<strike>{{/if}}<a href="{{{url}}}">{{{title}}}{{#if external}} <i class="icon-external-link"></i>{{/if}}</a>{{#if expired}}</strike>{{/if}}</dd>
              {{/each}}
            </dl>
            {{/if}}
          {{/each}}
          <div class="pricing-head">=== {{author}} ===</div>
        </script>

      </div>

    </div>

  </div>

</div><?php /** /container */ ?>
<?php /** End Content Part */ ?>