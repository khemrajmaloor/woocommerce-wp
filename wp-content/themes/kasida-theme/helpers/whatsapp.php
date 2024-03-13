<?php
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}

/**
 * |--------------------------
 * | Whatsapp Chat Bot
 * |--------------------------
 */

add_action('wp_footer', 'add_whatsapp_bot', 100);
function add_whatsapp_bot()
{
  if (!is_admin()) {

    $bubble_text = 'Hello 👋<br>Need any assistance!';  // use <br> for line break
    $whatsup_number = '+917717467736'; // your whatapp number

    $hello_message = 'Hello👋 %0D%0A';
    $whatsup_message = $hello_message . ' can you assist me on ' . get_bloginfo('name'); ?>

    <div class="whatsapp">
      <?php if ($bubble_text) { ?>
        <div class="whatsappallmessage">
          <div class="whatsappclose"><button class="whatsappclose-button" onclick="whatsapp(this)"> &times; </button></div>
          <a href="<?= "https://api.whatsapp.com/send?phone=" . $whatsup_number . "&text=" . $whatsup_message ?>">
            <p class="whatsapptext"><?= $bubble_text; ?></p>
          </a>
        </div>
      <?php }   ?>
      <a href="<?= "https://api.whatsapp.com/send?phone=" . $whatsup_number . "&text=" . $whatsup_message ?>">
        <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 14.552 14.552">
          <path opacity=".994" fill="#fff" d="M2.599 2.457h9.213v10.11H2.599z"></path>
          <path d="M27.452 28.572c-.902-.277-1.499-.962-1.662-1.909-.049-.284-.065-2.013-.052-5.527l.02-5.114.203-.43a2.351 2.351 0 011.178-1.178l.43-.204h5.373c6.016 0 5.688-.024 6.341.47.394.298.642.643.812 1.13.125.359.13.537.13 5.537 0 5.758.007 5.635-.438 6.288a2.282 2.282 0 01-1.236.912c-.398.125-.58.13-5.6.125-4.386-.004-5.235-.02-5.499-.1zm2.077-2.492l1.252-.395.373.167c.64.287 1.146.39 1.918.392 1.423.002 2.515-.477 3.508-1.54.845-.906 1.25-1.944 1.25-3.212 0-1.362-.415-2.354-1.392-3.336-.663-.666-1.273-1.027-2.135-1.264-.44-.12-.63-.136-1.388-.11-.784.025-.936.05-1.414.229-1.776.666-2.93 2.132-3.135 3.983a4.54 4.54 0 00.3 2.246c.098.231.21.5.25.597.063.153.02.33-.33 1.359-.417 1.227-.432 1.28-.355 1.28.025 0 .61-.178 1.298-.396zm2.549-.772a4.51 4.51 0 01-.832-.317l-.355-.192-.69.223a12.1 12.1 0 01-.733.224c-.024 0 .059-.307.185-.682l.228-.683-.265-.531c-.337-.673-.46-1.165-.46-1.83 0-1.494.799-2.825 2.103-3.502 1.15-.597 2.43-.618 3.56-.058a3.937 3.937 0 012.147 2.833 3.92 3.92 0 01-2.034 4.182 3.921 3.921 0 01-2.854.333zm2.882-1.578c.398-.186.56-.405.566-.77l.005-.267-.514-.277c-.282-.152-.56-.277-.618-.277-.057 0-.23.131-.382.291-.153.16-.316.292-.363.292-.047 0-.303-.145-.568-.323-.444-.297-.873-.756-1.079-1.154-.082-.159-.067-.194.262-.603l.137-.17-.208-.575c-.23-.635-.316-.735-.623-.735-.434 0-.862.583-.865 1.18-.003.608.515 1.533 1.298 2.32.48.483.83.708 1.58 1.012.62.252.925.264 1.372.056z" fill="#10b916"></path>
          <path d="M6.406 14.501c-3.164-.43-5.65-2.78-6.237-5.896-.137-.725-.135-1.89.004-2.629C.986 1.667 5.426-.956 9.567.426c2.51.838 4.289 2.866 4.863 5.547.108.501.108 2.155.001 2.66-.625 2.943-2.735 5.112-5.592 5.748-.666.148-1.812.205-2.433.12zm-2.277-2.977c.568-.18 1.064-.328 1.103-.327.039 0 .29.085.559.19.268.104.74.225 1.048.268 1.76.246 3.606-.742 4.396-2.352.389-.794.48-1.232.445-2.128-.046-1.19-.4-2.019-1.218-2.853-2.07-2.11-5.597-1.56-6.94 1.081-.586 1.153-.61 2.596-.061 3.787l.196.427-.361 1.058c-.38 1.115-.412 1.248-.28 1.204l1.113-.355zm2.392-.68a4.503 4.503 0 01-.753-.286l-.413-.204-.574.194c-.315.107-.61.194-.654.194-.055 0-.014-.197.13-.625l.209-.625-.242-.462c-.773-1.481-.473-3.185.763-4.323.686-.632 1.41-.907 2.392-.907.945 0 1.654.253 2.313.825.637.553.955 1.068 1.163 1.882.15.59.158 1.072.025 1.636-.315 1.338-1.437 2.453-2.741 2.723-.446.092-1.188.082-1.618-.022zM9.052 9.42c.319-.135.512-.384.548-.703l.032-.28-.538-.278-.538-.276-.304.3-.304.299-.335-.17a2.765 2.765 0 01-1.042-.928c-.233-.352-.245-.473-.062-.638.253-.228.262-.314.086-.784-.238-.638-.314-.736-.571-.736-.465 0-.862.595-.8 1.198.056.54.533 1.36 1.157 1.983.417.418.691.598 1.33.877.562.245.984.288 1.341.136z" fill="#11ba17"></path>
        </svg>
      </a>
    </div>
    <style>
      .whatsapp {
        position: fixed;
        bottom: 70px;
        right: 10px;
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        transition: all 0.3s ease;
      }

      p.whatsapptext {
        margin: 0;
        margin-bottom: 8px;
        text-align: center;
        background-color: #e1ffe9de;
        border-radius: 15px 5px 15px 5px;
        padding: 7px 7px 5px 7px;
        font-weight: bold;
        line-height: 1.2rem;
        font-size: 1rem;
        position: relative;
        word-wrap: break-word;
        max-width: 200px;
        color: #004303;
      }

      .whatsappclose {
        width: 100%;
        height: 1.7rem;
      }

      button.whatsappclose-button {
        padding: 0;
        background-color: #ffffff00;
        font-size: 1.45rem;
        cursor: pointer;
        color: #0000006b;
        transition: all 0.3s ease;
        border: none;
      }

      button.whatsappclose-button:hover {
        color: #000000;
      }
    </style>
    <script>
      function whatsapp(e) {
        e.parentElement.parentElement.remove()
      };
      if (document.body.scrollWidth > 900) {
        document.querySelectorAll('div.whatsapp a').forEach(e => e.href = "https://web." + e.href.split(".").slice(1).join('.'))
      }
    </script> <?php
  }
}
