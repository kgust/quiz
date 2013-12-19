For information about action hooks supported by OpenShift, consult the documentation:

http://openshift.github.io/documentation/oo_user_guide.html#the-openshift-directory

Understanding the OpenShift build
---------------------------------
1.  Pre-Receive During your push, OpenShift checks to ensure that your application is in a consistent state. There is no hook for this step.
2. Pre-Build This happens after the application is stopped and the new repo dir has been deployed but before the build. Runs the .openshift/action_hooks/pre_build script
3. Build This builds your application, downloads required deps, executes the .openshift/action_hooks/build script and preps everything for deployment.
4. Deploy This step happens right before the application is issued a start. Any required prep work to get the application ready to be started should be done in the .openshift/action_hooks/deploy hook.
5. Post-Deploy Some applications may need to interact with the running application to complete the deployment process. After the application starts, the .openshift/action_hooks/post_deploy hook will be executed.
