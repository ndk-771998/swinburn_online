#!/bin/bash

LAST_RELEASE_PATH=$1

echo $LAST_RELEASE_PATH

rsync --update -raz --progress $LAST_RELEASE_PATH/public/uploads $(pwd)/public
