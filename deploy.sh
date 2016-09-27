#!/bin/sh

# Plugin deploy script.
#
# Usage: ./deploy.sh


PLUGIN_SLUG=verify-domain-for-apple-pay-with-stripe

SVN_USER=memberful
SVN_URL="https://plugins.svn.wordpress.org/$PLUGIN_SLUG/"
LOCAL_SVN_PATH="/tmp/$PLUGIN_SLUG"
TRUNK_PATH="$LOCAL_SVN_PATH/trunk"
FILES_TO_COPY="apple-developer-merchantid-domain-association index.php readme.txt"
VERSION=`grep "Stable tag" readme.txt | awk '{print $3}'`
COMMIT_MESSAGE="Tagging version $VERSION"

echo "You are going to deploy version $VERSION to $SVN_URL"
echo "Do you want to continue? [y/N]"
read ANSWER

if ! echo $ANSWER | grep -E "^[yY][eE][sS]$|^[yY]$" > /dev/null; then
  echo "Exiting..."
  exit
fi

echo "Creating local copy of SVN repo in $LOCAL_SVN_PATH"
svn co $SVN_URL $LOCAL_SVN_PATH

echo "Adding files to trunk"
cp $FILES_TO_COPY $TRUNK_PATH
cd $TRUNK_PATH
# Add new files
svn status | grep "^?" | awk '{print $2}' | xargs svn add

echo "Commiting to trunk"
svn commit --username "$SVN_USER" -m "$COMMIT_MESSAGE"

echo "Tagging version $VERSION"
cd $LOCAL_SVN_PATH
mkdir -p tags/$VERSION
svn remove tags/$VERSION
svn copy trunk tags/$VERSION
cd tags/$VERSION
svn commit --username "$SVN_USER" -m "$COMMIT_MESSAGE"

echo "Removing temporary directory $LOCAL_SVN_PATH"
rm -fr $LOCAL_SVN_PATH

echo "Done!"
