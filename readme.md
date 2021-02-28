<h2>ZN Framework Shared Edition</h2>
<p>
    It is the version that blends the essence of the ZN Framework, offers a rational and comfortable use and includes a shared working directory.
</p>

<h3>Installation</h3>
<p>
You only need to run the following code for the installation.
</p>

```
composer create-project znframework/shared-edition
```

<h3>Directory Structure</h3>
<p>The directory structure of this version is shown below, and the usage purpose of the directories is explained one by one.</p>
<p>
    <ul>
        <li>app/
            <ul>
                <li>Console/</li>
                <li>Exceptions/</li>
                <li>Http/
                    <ul>
                        <li>Controllers/</li>
                        <li>Views/</li>
                    </ul>
                </li>
                <li>Models/</li>
            </ul>
        </li>
        <li>bootstrap/</li>
        <li>config/</li>
        <li>database/</li>
        <li>public/</li>
        <li>reources/
            <ul>
                <li>butchery/</li>
                <li>files/</li>
                <li>lang/</li>
                <li>templates/</li>
                <li>uploads/</li>
            </ul>
        </li>
        <li>routes/</li>
        <li>storage/</li>
    </ul>
</p>

<h3>Configuration</h3>
<p>
For configuration, edit the .conf file as follows.
</p>

```
<VirtualHost *:80>

    ServerAdmin webmaster@localhost
    DocumentRoot /var/www/html/public

    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
    
</VirtualHost>
```