<?php

// ========================================
// ============= KONFIGURACJA =============
// ========================================

// Link do webhooka na którego wysyłane mają być komunikaty
$WEBHOOK_URL = "https://discord.com/api/webhooks/1203508167846268949/Skj36IVXVFaM8vOwKlHE3yIMCtcjKb8jkxRh0qqy0k9MEi99LlidPGTRJygqeiHhT88b";

// Świat z którego akceptowane mają być grzyby (sprawdzany po nagłówku origin)
$REQUIRED_WORLD = "zemyna";

// Adres z którego mają być brane obrazki grzybów do pokazania na Discordzie
// (Margonem blokuje IP Discorda, więc nie działa bezpośrednio z cdn!)
// Należy ustawić na "<adres serwera na którym działa serwer>/obrazki"
// (MUSI się kończyć znakiem /)
$NPC_ICON_PATH = "https://priw8.com/margo/grzyby/obrazki/";

// Rola do powiadomienia w webhooku (trzeba skopiować ID roli i zamienić numerki niżej)
$PING = "<@&1158098635767152641>";

// ========================================
// ========================================
// ========================================

?>
