function is_googlebot($ip) {
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'Googlebot') !== false) {
        $host = gethostbyaddr($ip);
        if (substr($host, -14) == '.googlebot.com') {
            $host_ips = gethostbynamel($host);
            foreach ($host_ips as $host_ip) {
                if ($host_ip == $ip) {
                    return true;
                }
            }
        }
    }
    return false;
}
