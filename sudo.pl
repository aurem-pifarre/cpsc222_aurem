#!/usr/bin/perl

use strict
use warnings

my $journal = 'journalctl _SYSTEMD_UNIT=sudo.service | grep "COMMAND=/usr/bin/sudo" | grep "sudo:session" ';
my $result = 'journal_cmd';


