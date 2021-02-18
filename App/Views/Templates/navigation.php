<body>
<header>
  <nav>
    <ul>
      <li><a href="/en/<?php echo $scController.'/'.$scAction; ?>">En</a></li>
      <li><a href="/nl/<?php echo $scController.'/'.$scAction; ?>">Nl</a></li>
      <li><a href="/fr/<?php echo $scController.'/'.$scAction; ?>">Fr</a></li>
    </ul>
    <ul>
      <li><a href="/<?php echo $scLang; ?>/Home/index"><?php echo $trans['home']; ?></a></li>
      <li><a href="/<?php echo $scLang; ?>/About/index"><?php echo $trans['about']; ?></a></li>
      <li><a href="/<?php echo $scLang; ?>/Contact/index"><?php echo $trans['contact']; ?></a></li>
    </ul>
  </nav>
</header>