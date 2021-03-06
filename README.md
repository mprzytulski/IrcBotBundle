IrcBotBundle
============

## Installation

1. Download IrcBotBundle
2. Configure server, user
3. Launch the IrcBot!

### Step 1: Download IrcBotBundle

```js
{
    "require": {
        "whisller/irc-bot-bundle": "*"
    }
}
```

Now tell composer to download the bundle by running the command:

``` bash
$ php composer.phar update whisller/irc-bot-bundle
```

Composer will install the bundle to your project's `vendor/whisller` directory.

### Step 2: Configure server, user

Basic configuration:
```yaml
whisnet_irc_bot:
  user: ~
  channels: ["#test-irc"]
```

Advanced configuration:
```yaml
whisnet_irc_bot:
    host: irc.freenode.net
    port: 6667
    command_prefix: !bot
    user:
        username: IrcBotBundle
        hostname: example.com
        realname: IrcBotBundle
        servername: IrcBotBundle
    channels: ["#test-irc", "#test-other-irc"]
```

### Step 3: Launch the IrcBot!
``` bash
$ php app/console irc:launch
```