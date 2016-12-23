<?php

namespace Topxia\Service\Course;

interface CourseService
{
    /**
     * 每个课程可添加的最大的教师人数
     */
    const MAX_TEACHER = 100;

    /**
     * Course API
     */

    public function getCourse($id);

    public function findCoursesByIds(array $ids);

    public function findCoursesByParentIdAndLocked($parentId, $locked);

    public function findCoursesByCourseIds(array $ids, $start, $limit);

    public function findCoursesByLikeTitle($title);

    public function findMinStartTimeByCourseId($courseId);

    public function findNormalCoursesByAnyTagIdsAndStatus(array $tagIds, $status, $orderBy, $start, $limit);

    public function searchCourses($conditions, $sort, $start, $limit);

    public function searchCourseCount($conditions);

    public function findCoursesCountByLessThanCreatedTime($endTime);

    public function analysisCourseSumByTime($endTime);

    public function findUserLearnCourses($userId, $start, $limit);

    public function findUserLearnCoursesNotInClassroom($userId, $start, $limit); //

    public function findUserLearnCourseCount($userId);

    public function findUserLearnCourseCountNotInClassroom($userId); //

    public function findUserLeaningCourses($userId, $start, $limit, $filters = array());

    public function findUserLeaningCourseCount($userId, $filters = array());

    public function findUserLeanedCourseCount($userId, $filters = array());

    public function findUserLeanedCourses($userId, $start, $limit, $filters = array());

    public function findUserTeachCourseCount($conditions, $onlyPublished = true);

    public function findUserTeachCourses($conditions, $start, $limit, $onlyPublished = true);

    public function findUserFavoritedCourseCount($userId);

    public function findUserFavoritedCourses($userId, $start, $limit);

    public function findRandomCourses($conditions, $num);

    public function createCourse($course);

    public function updateCourse($id, $fields);

    public function batchUpdateOrg($courseIds, $orgCode);

    public function updateCourseCounter($id, $counter);

    public function changeCoursePicture($courseId, $files);

    public function recommendCourse($id, $number);

    public function hitCourse($id);

    public function waveCourse($id, $field, $diff);

    public function cancelRecommendCourse($id);

    public function analysisCourseDataByTime($startTime, $endTime);

    public function findLearnedCoursesByCourseIdAndUserId($courseId, $userId);

    public function setCoursePrice($courseId, $currency, $price);

    public function setCoursesPriceWithDiscount($discountId);

    public function revertCoursesPriceWithDiscount($discountId);

    /**
     * 删除课程
     */
    public function deleteCourse($id);

    public function publishCourse($id);

    public function closeCourse($id);

    /**
     * Lesson API
     */

    public function getLesson($id);

    public function setCourseLessonMaxOnlineNum($lessonId, $num);

    public function findLessonsByIds(array $ids);

    public function findLessonsByCopyIdAndLockedCourseIds($copyId, array $courseIds);

    public function getCourseLesson($courseId, $lessonId);

    public function findCourseDraft($courseId, $lessonId, $userId);

    public function getCourseLessons($courseId);

    public function deleteCourseDrafts($courseId, $lessonId, $userId);

    public function findLessonsByTypeAndMediaId($type, $mediaId);

    public function searchLessons($conditions, $orderBy, $start, $limit);

    public function searchLessonCount($conditions);

    public function createLesson($lesson);

    public function createLessonByFileId($courseId, $fileId);

    public function getCourseDraft($id);

    public function createCourseDraft($draft);

    public function updateLesson($courseId, $lessonId, $fields);

    public function updateCourseDraft($courseId, $lessonId, $userId, $fields);

    public function deleteLesson($courseId, $lessonId);

    public function sumLessonGiveCreditByLessonIds($lessonIds);

    public function publishLesson($courseId, $lessonId);

    public function unpublishLesson($courseId, $lessonId);

    public function resetLessonMediaId($lessonId);

    public function getNextLessonNumber($courseId);

    public function liveLessonTimeCheck($courseId, $lessonId, $startTime, $length);

    public function calculateLiveCourseLeftCapacityInTimeRange($startTime, $endTime, $excludeLessonId);

    public function canLearnLesson($courseId, $lessonId);

    public function startLearnLesson($courseId, $lessonId);

    public function createLessonView($createLessonView);

    public function finishLearnLesson($courseId, $lessonId);

    public function findLatestFinishedLearns($start, $limit);

    public function cancelLearnLesson($courseId, $lessonId);

    public function getUserLearnLessonStatus($userId, $courseId, $lessonId);

    public function getUserLearnLessonStatuses($userId, $courseId);

    public function getLearnByUserIdAndLessonId($userId, $lessonId);

    public function findUserLearnedLessons($userId, $courseId);

    public function getUserNextLearnLesson($userId, $courseId);

    public function searchLearnCount($conditions);

    public function searchLearns($conditions, $orderBy, $start, $limit);

    public function analysisLessonDataByTime($startTime, $endTime);

    public function findFutureLiveDates($courseIds, $limit);

    public function findFutureLiveCourseIds();

    public function findPastLiveCourseIds();

    public function analysisLessonFinishedDataByTime($startTime, $endTime);

    public function searchAnalysisLessonViewCount($conditions);

    public function getAnalysisLessonMinTime($type);

    public function searchAnalysisLessonView($conditions, $orderBy, $start, $limit);

    public function analysisLessonViewDataByTime($startTime, $endTime, $conditions);

    public function waveLearningTime($userId, $lessonId, $time);

    public function findLearnsCountByLessonId($lessonId);

    public function waveWatchingTime($userId, $lessonId, $time);

    public function searchLearnTime($conditions);

    public function searchWatchTime($conditions);

    public function checkWatchNum($userId, $lessonId);
    /**
     * Chapter API
     */

    public function getChapter($courseId, $chapterId);

    public function getCourseChapters($courseId);

    public function createChapter($chapter);

    public function updateChapter($courseId, $chapterId, $fields);

    public function deleteChapter($courseId, $chapterId);

    public function getNextChapterNumber($courseId);

    public function findChaptersByCopyIdAndLockedCourseIds($copyId, $courseIds);

    /**
     * 获得课程的目录项
     *
     * 目录项包含，章节、课时、测验
     *
     */
    public function getCourseItems($courseId);

    public function sortCourseItems($courseId, array $itemIds);

    /**
     * Member API
     */



    /**
     * 尝试管理课程, 无权限则抛出异常
     * 例如：编辑、上传资料...
     *
     * @param  Integer $courseId      课程ID
     * @return array   课程信息
     */
    public function tryManageCourse($courseId);

    /**
     * 是否可以管理课程
     *
     * 注意： 如果课程不存在，且当前操作用户为管理员时，返回true。
     *
     */
    public function canManageCourse($courseId);

    /**
     * 尝试使用课程
     * 例如：查看收费课时、提问、下载资料...
     *
     * @param  Integer $courseId      课程ID
     * @return array   课程信息
     */
    public function tryTakeCourse($courseId);

    /**
     * 是否可以使用课程
     */
    public function canTakeCourse($course);

    /**
     * 尝试学习课程
     *
     * 只有是课程的学员/教师，才可以学习。
     *
     * @param  [type]  $courseId 课程ID
     * @return array
     */
    public function tryLearnCourse($courseId);

    public function increaseLessonQuizCount($lessonId);

    public function resetLessonQuizCount($lessonId, $count);

    public function increaseLessonMaterialCount($lessonId);

    public function resetLessonMaterialCount($lessonId, $count);

    public function setMemberNoteNumber($courseId, $userId, $number);

    public function favoriteCourse($courseId);

    public function unFavoriteCourse($courseId);

    public function hasFavoritedCourse($courseId);

    public function searchCourseFavoriteCount($conditions);

    public function searchCourseFavorites($conditions, $orderBy, $start, $limit);

    public function generateLessonReplay($courseId, $lessonId);

    public function generateLessonVideoReplay($courseId, $lessonId, $fileId);

    public function entryReplay($lessonId, $courseLessonReplayId);

    public function getCourseLessonReplayByLessonId($lessonId, $lessonType);

    public function deleteCourseLessonReplayByLessonId($lessonId);

    public function createMemberByClassroomJoined($courseId, $userId, $classRoomId, array $info);

    public function findCoursesByStudentIdAndCourseIds($studentId, $courseIds);

    public function becomeStudentByClassroomJoined($courseId, $userId);

    public function addCourseLessonReplay($courseLessonReplay);

    public function deleteLessonReplayByLessonId($lessonId, $lessonType);

    public function getCourseLessonReplayByCourseIdAndLessonId($courseId, $lessonId, $lessonType);

    public function getCourseLessonReplay($id);

    public function updateCourseLessonReplay($id, $fields);

    public function updateCourseLessonReplayByLessonId($lessonId, $fields, $lessonType);

    public function searchCourseLessonReplayCount($conditions);

    public function searchCourseLessonReplays($conditions, $orderBy, $start, $limit);

    public function findReplaysByCourseIdAndLessonId($courseId, $lessonId, $lessonType = 'live');

}
