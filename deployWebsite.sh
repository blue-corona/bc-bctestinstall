#!/bin/sh
echo runing shell... &>> /sites/bctestinstall/bctestinstallDeployOutput.txt
cd /sites/bctestinstall/wp-content/themes &>> /sites/bctestinstall/bctestinstallDeployOutput.txt
if [ $? -ne 0 ]; then
echo FAIL  &>> /sites/bctestinstall/bctestinstallDeployOutput.txt
exit 0
fi
#unzip \*.zip &>> /sites/bctestinstall/bctestinstallDeployOutput.txt
#rm *.zip &>> /sites/bctestinstall/bctestinstallDeployOutput.txt
cd /sites/bctestinstall/wp-content/plugins &>> /sites/bctestinstall/bctestinstallDeployOutput.txt
if [ $? -ne 0 ]; then
echo FAIL &>> /sites/bctestinstall/bctestinstallDeployOutput.txt
exit 0
fi
#unzip \*.zip &>> /sites/bctestinstall/bctestinstallDeployOutput.txt
#rm *.zip &>> /sites/bctestinstall/bctestinstallDeployOutput.txt
wp theme activate bluecorona-theme &>> /sites/bctestinstall/bctestinstallDeployOutput.txt
wp plugin activate bc-promotions classic-editor &>> /sites/bctestinstall/bctestinstallDeployOutput.txt
#wp user create anjalityagi anjalityagi@gmail.com --role=administrator --user_pass=12345678 &>> /sites/bctestinstall/bctestinstallDeployOutput.txt