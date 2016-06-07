<?php
// This file was auto-generated from sdk-root/src/data/logs/2014-03-28/docs-2.json
return [ 'version' => '2.0', 'operations' => [ 'CancelExportTask' => '<p> Cancels an export task if it is in <code>PENDING</code> or <code>RUNNING</code> state. </p>', 'CreateExportTask' => '<p> Creates an <code>ExportTask</code> which allows you to efficiently export data from a Log Group to your Amazon S3 bucket. </p> <p> This is an asynchronous call. If all the required information is provided, this API will initiate an export task and respond with the task Id. Once started, <code>DescribeExportTasks</code> can be used to get the status of an export task. </p>', 'CreateLogGroup' => '<p> Creates a new log group with the specified name. The name of the log group must be unique within a region for an AWS account. You can create up to 500 log groups per account. </p> <p> You must use the following guidelines when naming a log group: <ul> <li>Log group names can be between 1 and 512 characters long.</li> <li>Allowed characters are a-z, A-Z, 0-9, \'_\' (underscore], \'-\' (hyphen], \'/\' (forward slash], and \'.\' (period].</li> </ul> </p>', 'CreateLogStream' => '<p> Creates a new log stream in the specified log group. The name of the log stream must be unique within the log group. There is no limit on the number of log streams that can exist in a log group. </p> <p> You must use the following guidelines when naming a log stream: <ul> <li>Log stream names can be between 1 and 512 characters long.</li> <li>The \':\' colon character is not allowed.</li> </ul> </p>', 'DeleteDestination' => '<p> Deletes the destination with the specified name and eventually disables all the subscription filters that publish to it. This will not delete the physical resource encapsulated by the destination. </p>', 'DeleteLogGroup' => '<p> Deletes the log group with the specified name and permanently deletes all the archived log events associated with it. </p>', 'DeleteLogStream' => '<p> Deletes a log stream and permanently deletes all the archived log events associated with it. </p>', 'DeleteMetricFilter' => '<p> Deletes a metric filter associated with the specified log group. </p>', 'DeleteRetentionPolicy' => '<p> Deletes the retention policy of the specified log group. Log events would not expire if they belong to log groups without a retention policy. </p>', 'DeleteSubscriptionFilter' => '<p> Deletes a subscription filter associated with the specified log group. </p>', 'DescribeDestinations' => '<p> Returns all the destinations that are associated with the AWS account making the request. The list returned in the response is ASCII-sorted by destination name. </p> <p> By default, this operation returns up to 50 destinations. If there are more destinations to list, the response would contain a <code class="code">nextToken</code> value in the response body. You can also limit the number of destinations returned in the response by specifying the <code class="code">limit</code> parameter in the request. </p>', 'DescribeExportTasks' => '<p> Returns all the export tasks that are associated with the AWS account making the request. The export tasks can be filtered based on <code>TaskId</code> or <code>TaskStatus</code>. </p> <p> By default, this operation returns up to 50 export tasks that satisfy the specified filters. If there are more export tasks to list, the response would contain a <code class="code">nextToken</code> value in the response body. You can also limit the number of export tasks returned in the response by specifying the <code class="code">limit</code> parameter in the request. </p>', 'DescribeLogGroups' => '<p> Returns all the log groups that are associated with the AWS account making the request. The list returned in the response is ASCII-sorted by log group name. </p> <p> By default, this operation returns up to 50 log groups. If there are more log groups to list, the response would contain a <code class="code">nextToken</code> value in the response body. You can also limit the number of log groups returned in the response by specifying the <code class="code">limit</code> parameter in the request. </p>', 'DescribeLogStreams' => '<p> Returns all the log streams that are associated with the specified log group. The list returned in the response is ASCII-sorted by log stream name. </p> <p> By default, this operation returns up to 50 log streams. If there are more log streams to list, the response would contain a <code class="code">nextToken</code> value in the response body. You can also limit the number of log streams returned in the response by specifying the <code class="code">limit</code> parameter in the request. This operation has a limit of five transactions per second, after which transactions are throttled. </p>', 'DescribeMetricFilters' => '<p> Returns all the metrics filters associated with the specified log group. The list returned in the response is ASCII-sorted by filter name. </p> <p> By default, this operation returns up to 50 metric filters. If there are more metric filters to list, the response would contain a <code class="code">nextToken</code> value in the response body. You can also limit the number of metric filters returned in the response by specifying the <code class="code">limit</code> parameter in the request. </p>', 'DescribeSubscriptionFilters' => '<p> Returns all the subscription filters associated with the specified log group. The list returned in the response is ASCII-sorted by filter name. </p> <p> By default, this operation returns up to 50 subscription filters. If there are more subscription filters to list, the response would contain a <code class="code">nextToken</code> value in the response body. You can also limit the number of subscription filters returned in the response by specifying the <code class="code">limit</code> parameter in the request. </p>', 'FilterLogEvents' => '<p> Retrieves log events, optionally filtered by a filter pattern from the specified log group. You can provide an optional time range to filter the results on the event <code class="code">timestamp</code>. You can limit the streams searched to an explicit list of <code class="code">logStreamNames</code>. </p> <p> By default, this operation returns as much matching log events as can fit in a response size of 1MB, up to 10,000 log events, or all the events found within a time-bounded scan window. If the response includes a <code class="code">nextToken</code>, then there is more data to search, and the search can be resumed with a new request providing the nextToken. The response will contain a list of <code class="code">searchedLogStreams</code> that contains information about which streams were searched in the request and whether they have been searched completely or require further pagination. The <code class="code">limit</code> parameter in the request. can be used to specify the maximum number of events to return in a page. </p>', 'GetLogEvents' => '<p> Retrieves log events from the specified log stream. You can provide an optional time range to filter the results on the event <code class="code">timestamp</code>. </p> <p> By default, this operation returns as much log events as can fit in a response size of 1MB, up to 10,000 log events. The response will always include a <code class="code">nextForwardToken</code> and a <code class="code">nextBackwardToken</code> in the response body. You can use any of these tokens in subsequent <code class="code">GetLogEvents</code> requests to paginate through events in either forward or backward direction. You can also limit the number of log events returned in the response by specifying the <code class="code">limit</code> parameter in the request. </p>', 'PutDestination' => '<p> Creates or updates a <code>Destination</code>. A destination encapsulates a physical resource (such as a Kinesis stream] and allows you to subscribe to a real-time stream of log events of a different account, ingested through <code class="code">PutLogEvents</code> requests. Currently, the only supported physical resource is a Amazon Kinesis stream belonging to the same account as the destination. </p> <p> A destination controls what is written to its Amazon Kinesis stream through an access policy. By default, PutDestination does not set any access policy with the destination, which means a cross-account user will not be able to call <code>PutSubscriptionFilter</code> against this destination. To enable that, the destination owner must call <code>PutDestinationPolicy</code> after PutDestination. </p>', 'PutDestinationPolicy' => '<p> Creates or updates an access policy associated with an existing <code>Destination</code>. An access policy is an <a href="http://docs.aws.amazon.com/IAM/latest/UserGuide/policies_overview.html">IAM policy document</a> that is used to authorize claims to register a subscription filter against a given destination. </p>', 'PutLogEvents' => '<p> Uploads a batch of log events to the specified log stream. </p> <p> Every PutLogEvents request must include the <code class="code">sequenceToken</code> obtained from the response of the previous request. An upload in a newly created log stream does not require a <code class="code">sequenceToken</code>. </p> <p> The batch of events must satisfy the following constraints: <ul> <li>The maximum batch size is 1,048,576 bytes, and this size is calculated as the sum of all event messages in UTF-8, plus 26 bytes for each log event.</li> <li>None of the log events in the batch can be more than 2 hours in the future.</li> <li>None of the log events in the batch can be older than 14 days or the retention period of the log group.</li> <li>The log events in the batch must be in chronological ordered by their <code class="code">timestamp</code>.</li> <li>The maximum number of log events in a batch is 10,000.</li> </ul> </p>', 'PutMetricFilter' => '<p> Creates or updates a metric filter and associates it with the specified log group. Metric filters allow you to configure rules to extract metric data from log events ingested through <code class="code">PutLogEvents</code> requests. </p> <p> The maximum number of metric filters that can be associated with a log group is 100. </p>', 'PutRetentionPolicy' => '<p> Sets the retention of the specified log group. A retention policy allows you to configure the number of days you want to retain log events in the specified log group. </p>', 'PutSubscriptionFilter' => '<p> Creates or updates a subscription filter and associates it with the specified log group. Subscription filters allow you to subscribe to a real-time stream of log events ingested through <code class="code">PutLogEvents</code> requests and have them delivered to a specific destination. Currently, the supported destinations are: <ul> <li> A Amazon Kinesis stream belonging to the same account as the subscription filter, for same-account delivery. </li> <li> A logical destination (used via an ARN of <code>Destination</code>] belonging to a different account, for cross-account delivery. </li> </ul> </p> <p> Currently there can only be one subscription filter associated with a log group. </p>', 'TestMetricFilter' => '<p> Tests the filter pattern of a metric filter against a sample of log event messages. You can use this operation to validate the correctness of a metric filter pattern. </p>', ], 'shapes' => [ 'AccessPolicy' => [ 'refs' => [ 'Destination$accessPolicy' => '<p>An IAM policy document that governs which AWS accounts can create subscription filters against this destination.</p>', 'PutDestinationPolicyRequest$accessPolicy' => '<p>An IAM policy document that authorizes cross-account users to deliver their log events to associated destination.</p>', ], ], 'Arn' => [ 'refs' => [ 'Destination$arn' => '<p>ARN of this destination.</p>', ], ], 'CancelExportTaskRequest' => [ 'refs' => [], ], 'CreateExportTaskRequest' => [ 'refs' => [], ], 'CreateExportTaskResponse' => [ 'refs' => [], ], 'CreateLogGroupRequest' => [ 'refs' => [], ], 'CreateLogStreamRequest' => [ 'refs' => [], ], 'DataAlreadyAcceptedException' => [ 'refs' => [], ], 'Days' => [ 'base' => '<p>Specifies the number of days you want to retain log events in the specified log group. Possible values are: 1, 3, 5, 7, 14, 30, 60, 90, 120, 150, 180, 365, 400, 545, 731, 1827, 3653.</p>', 'refs' => [], ], 'DeleteDestinationRequest' => [ 'refs' => [], ], 'DeleteLogGroupRequest' => [ 'refs' => [], ], 'DeleteLogStreamRequest' => [ 'refs' => [], ], 'DeleteMetricFilterRequest' => [ 'refs' => [], ], 'DeleteRetentionPolicyRequest' => [ 'refs' => [], ], 'DeleteSubscriptionFilterRequest' => [ 'refs' => [], ], 'Descending' => [ 'refs' => [ 'DescribeLogStreamsRequest$descending' => '<p> If set to true, results are returned in descending order. If you don\'t specify a value or set it to false, results are returned in ascending order. </p>', ], ], 'DescribeDestinationsRequest' => [ 'refs' => [], ], 'DescribeDestinationsResponse' => [ 'refs' => [], ], 'DescribeExportTasksRequest' => [ 'refs' => [], ], 'DescribeExportTasksResponse' => [ 'refs' => [], ], 'DescribeLimit' => [ 'base' => '<p>The maximum number of results to return.</p>', 'refs' => [ 'DescribeExportTasksRequest$limit' => '<p> The maximum number of items returned in the response. If you don\'t specify a value, the request would return up to 50 items. </p>', 'DescribeLogGroupsRequest$limit' => '<p> The maximum number of items returned in the response. If you don\'t specify a value, the request would return up to 50 items. </p>', 'DescribeLogStreamsRequest$limit' => '<p> The maximum number of items returned in the response. If you don\'t specify a value, the request would return up to 50 items. </p>', 'DescribeMetricFiltersRequest$limit' => '<p> The maximum number of items returned in the response. If you don\'t specify a value, the request would return up to 50 items. </p>', ], ], 'DescribeLogGroupsRequest' => [ 'refs' => [], ], 'DescribeLogGroupsResponse' => [ 'refs' => [], ], 'DescribeLogStreamsRequest' => [ 'refs' => [], ], 'DescribeLogStreamsResponse' => [ 'refs' => [], ], 'DescribeMetricFiltersRequest' => [ 'refs' => [], ], 'DescribeMetricFiltersResponse' => [ 'refs' => [], ], 'DescribeSubscriptionFiltersRequest' => [ 'refs' => [], ], 'DescribeSubscriptionFiltersResponse' => [ 'refs' => [], ], 'Destination' => [ 'base' => '<p>A cross account destination that is the recipient of subscription log events.</p>', 'refs' => [], ], 'DestinationArn' => [ 'refs' => [ 'PutSubscriptionFilterRequest$destinationArn' => '<p>The ARN of the destination to deliver matching log events to. Currently, the supported destinations are: <ul> <li> A Amazon Kinesis stream belonging to the same account as the subscription filter, for same-account delivery. </li> <li> A logical destination (used via an ARN of <code>Destination</code>] belonging to a different account, for cross-account delivery. </li> </ul> </p>', ], ], 'DestinationName' => [ 'refs' => [ 'DeleteDestinationRequest$destinationName' => '<p>The name of destination to delete.</p>', 'DescribeDestinationsRequest$DestinationNamePrefix' => '<p>Will only return destinations that match the provided destinationNamePrefix. If you don\'t specify a value, no prefix is applied.</p>', 'Destination$destinationName' => '<p>Name of the destination.</p>', 'PutDestinationPolicyRequest$destinationName' => '<p>A name for an existing destination.</p>', 'PutDestinationRequest$destinationName' => '<p>A name for the destination.</p>', ], ], 'Destinations' => [ 'refs' => [], ], 'EventId' => [ 'refs' => [ 'FilteredLogEvent$eventId' => '<p>A unique identifier for this event.</p>', ], ], 'EventMessage' => [ 'refs' => [ 'FilteredLogEvent$message' => '<p>The data contained in the log event.</p>', ], ], 'EventNumber' => [ 'refs' => [], ], 'EventsLimit' => [ 'base' => '<p>The maximum number of events to return.</p>', 'refs' => [ 'FilterLogEventsRequest$limit' => '<p>The maximum number of events to return in a page of results. Default is 10,000 events.</p>', 'GetLogEventsRequest$limit' => '<p> The maximum number of log events returned in the response. If you don\'t specify a value, the request would return as many log events as can fit in a response size of 1MB, up to 10,000 log events. </p>', ], ], 'ExportDestinationBucket' => [ 'refs' => [ 'CreateExportTaskRequest$destination' => '<p>Name of Amazon S3 bucket to which the log data will be exported. <br><b>NOTE: Only buckets in the same AWS region are supported</b></p>', 'ExportTask$destination' => '<p>Name of Amazon S3 bucket to which the log data was exported.</p>', ], ], 'ExportDestinationPrefix' => [ 'refs' => [ 'CreateExportTaskRequest$destinationPrefix' => '<p>Prefix that will be used as the start of Amazon S3 key for every object exported. If not specified, this defaults to \'exportedlogs\'.</p>', 'ExportTask$destinationPrefix' => '<p>Prefix that was used as the start of Amazon S3 key for every object exported.</p>', ], ], 'ExportTask' => [ 'base' => '<p>Represents an export task.</p>', 'refs' => [], ], 'ExportTaskExecutionInfo' => [ 'base' => '<p>Represents the status of an export task.</p>', 'refs' => [ 'ExportTask$executionInfo' => '<p>Execution info about the export task.</p>', ], ], 'ExportTaskId' => [ 'refs' => [ 'CancelExportTaskRequest$taskId' => '<p>Id of the export task to cancel.</p>', 'CreateExportTaskResponse$taskId' => '<p>Id of the export task that got created.</p>', 'DescribeExportTasksRequest$taskId' => '<p>Export task that matches the specified task Id will be returned. This can result in zero or one export task.</p>', 'ExportTask$taskId' => '<p>Id of the export task.</p>', ], ], 'ExportTaskName' => [ 'refs' => [ 'CreateExportTaskRequest$taskName' => '<p>The name of the export task.</p>', 'ExportTask$taskName' => '<p>The name of the export task.</p>', ], ], 'ExportTaskStatus' => [ 'base' => '<p>Represents the status of an export task.</p>', 'refs' => [ 'ExportTask$status' => '<p>Status of the export task.</p>', ], ], 'ExportTaskStatusCode' => [ 'refs' => [ 'DescribeExportTasksRequest$statusCode' => '<p>All export tasks that matches the specified status code will be returned. This can return zero or more export tasks.</p>', 'ExportTaskStatus$code' => '<p>Status code of the export task.</p>', ], ], 'ExportTaskStatusMessage' => [ 'refs' => [ 'ExportTaskStatus$message' => '<p>Status message related to the <code class="code">code</code>.</p>', ], ], 'ExportTasks' => [ 'base' => '<p>A list of export tasks.</p>', 'refs' => [], ], 'ExtractedValues' => [ 'refs' => [], ], 'FilterCount' => [ 'base' => '<p>The number of metric filters associated with the log group.</p>', 'refs' => [], ], 'FilterLogEventsRequest' => [ 'refs' => [], ], 'FilterLogEventsResponse' => [ 'refs' => [], ], 'FilterName' => [ 'base' => '<p>A name for a metric or subscription filter.</p>', 'refs' => [ 'DeleteMetricFilterRequest$filterName' => '<p>The name of the metric filter to delete.</p>', 'DeleteSubscriptionFilterRequest$filterName' => '<p>The name of the subscription filter to delete.</p>', 'DescribeMetricFiltersRequest$filterNamePrefix' => '<p>Will only return metric filters that match the provided filterNamePrefix. If you don\'t specify a value, no prefix filter is applied.</p>', 'DescribeSubscriptionFiltersRequest$filterNamePrefix' => '<p>Will only return subscription filters that match the provided filterNamePrefix. If you don\'t specify a value, no prefix filter is applied.</p>', 'PutMetricFilterRequest$filterName' => '<p>A name for the metric filter.</p>', 'PutSubscriptionFilterRequest$filterName' => '<p>A name for the subscription filter.</p>', ], ], 'FilterPattern' => [ 'base' => '<p>A symbolic description of how Amazon CloudWatch Logs should interpret the data in each log event. For example, a log event may contain timestamps, IP addresses, strings, and so on. You use the filter pattern to specify what to look for in the log event message.</p>', 'refs' => [ 'FilterLogEventsRequest$filterPattern' => '<p> A valid CloudWatch Logs filter pattern to use for filtering the response. If not provided, all the events are matched. </p>', 'PutMetricFilterRequest$filterPattern' => '<p>A valid CloudWatch Logs filter pattern for extracting metric data out of ingested log events.</p>', 'PutSubscriptionFilterRequest$filterPattern' => '<p>A valid CloudWatch Logs filter pattern for subscribing to a filtered stream of log events.</p>', ], ], 'FilteredLogEvent' => [ 'base' => '<p>Represents a matched event from a <code class="code">FilterLogEvents</code> request.</p>', 'refs' => [], ], 'FilteredLogEvents' => [ 'base' => '<p>A list of matched <code class="code">FilteredLogEvent</code> objects returned from a <code class="code">FilterLogEvents</code> request.</p>', 'refs' => [ 'FilterLogEventsResponse$events' => '<p>A list of <code class="code">FilteredLogEvent</code> objects representing the matched events from the request.</p>', ], ], 'GetLogEventsRequest' => [ 'refs' => [], ], 'GetLogEventsResponse' => [ 'refs' => [], ], 'InputLogEvent' => [ 'base' => '<p>A log event is a record of some activity that was recorded by the application or resource being monitored. The log event record that Amazon CloudWatch Logs understands contains two properties: the timestamp of when the event occurred, and the raw event message.</p>', 'refs' => [], ], 'InputLogEvents' => [ 'base' => '<p>A list of log events belonging to a log stream.</p>', 'refs' => [], ], 'InputLogStreamNames' => [ 'base' => '<p>A list of log stream names.</p>', 'refs' => [ 'FilterLogEventsRequest$logStreamNames' => '<p> Optional list of log stream names within the specified log group to search. Defaults to all the log streams in the log group. </p>', ], ], 'Interleaved' => [ 'refs' => [ 'FilterLogEventsRequest$interleaved' => '<p>If provided, the API will make a best effort to provide responses that contain events from multiple log streams within the log group interleaved in a single response. If not provided, all the matched log events in the first log stream will be searched first, then those in the next log stream, etc.</p>', ], ], 'InvalidOperationException' => [ 'base' => '<p>Returned if the operation is not valid on the specified resource</p>', 'refs' => [], ], 'InvalidParameterException' => [ 'base' => '<p>Returned if a parameter of the request is incorrectly specified.</p>', 'refs' => [], ], 'InvalidSequenceTokenException' => [ 'refs' => [], ], 'LimitExceededException' => [ 'base' => '<p>Returned if you have reached the maximum number of resources that can be created.</p>', 'refs' => [], ], 'LogEventIndex' => [ 'refs' => [], ], 'LogGroup' => [ 'refs' => [], ], 'LogGroupName' => [ 'refs' => [ 'CreateExportTaskRequest$logGroupName' => '<p>The name of the log group to export.</p>', 'CreateLogGroupRequest$logGroupName' => '<p>The name of the log group to create.</p>', 'CreateLogStreamRequest$logGroupName' => '<p>The name of the log group under which the log stream is to be created.</p>', 'DeleteLogGroupRequest$logGroupName' => '<p>The name of the log group to delete.</p>', 'DeleteLogStreamRequest$logGroupName' => '<p>The name of the log group under which the log stream to delete belongs.</p>', 'DeleteMetricFilterRequest$logGroupName' => '<p>The name of the log group that is associated with the metric filter to delete.</p>', 'DeleteRetentionPolicyRequest$logGroupName' => '<p>The name of the log group that is associated with the retention policy to delete.</p>', 'DeleteSubscriptionFilterRequest$logGroupName' => '<p>The name of the log group that is associated with the subscription filter to delete.</p>', 'DescribeLogGroupsRequest$logGroupNamePrefix' => '<p>Will only return log groups that match the provided logGroupNamePrefix. If you don\'t specify a value, no prefix filter is applied.</p>', 'DescribeLogStreamsRequest$logGroupName' => '<p>The log group name for which log streams are to be listed.</p>', 'DescribeMetricFiltersRequest$logGroupName' => '<p>The log group name for which metric filters are to be listed.</p>', 'DescribeSubscriptionFiltersRequest$logGroupName' => '<p>The log group name for which subscription filters are to be listed.</p>', 'ExportTask$logGroupName' => '<p>The name of the log group from which logs data was exported.</p>', 'FilterLogEventsRequest$logGroupName' => '<p> The name of the log group to query. </p>', 'GetLogEventsRequest$logGroupName' => '<p>The name of the log group to query.</p>', 'PutLogEventsRequest$logGroupName' => '<p>The name of the log group to put log events to.</p>', 'PutMetricFilterRequest$logGroupName' => '<p>The name of the log group to associate the metric filter with.</p>', 'PutRetentionPolicyRequest$logGroupName' => '<p>The name of the log group to associate the retention policy with.</p>', 'PutSubscriptionFilterRequest$logGroupName' => '<p>The name of the log group to associate the subscription filter with.</p>', ], ], 'LogGroups' => [ 'base' => '<p>A list of log groups.</p>', 'refs' => [], ], 'LogStream' => [ 'base' => '<p>A log stream is sequence of log events from a single emitter of logs.</p>', 'refs' => [], ], 'LogStreamName' => [ 'refs' => [ 'CreateExportTaskRequest$logStreamNamePrefix' => '<p>Will only export log streams that match the provided logStreamNamePrefix. If you don\'t specify a value, no prefix filter is applied.</p>', 'CreateLogStreamRequest$logStreamName' => '<p>The name of the log stream to create.</p>', 'DeleteLogStreamRequest$logStreamName' => '<p>The name of the log stream to delete.</p>', 'DescribeLogStreamsRequest$logStreamNamePrefix' => '<p> Will only return log streams that match the provided logStreamNamePrefix. If you don\'t specify a value, no prefix filter is applied. </p>', 'FilteredLogEvent$logStreamName' => '<p>The name of the log stream this event belongs to.</p>', 'GetLogEventsRequest$logStreamName' => '<p>The name of the log stream to query.</p>', 'PutLogEventsRequest$logStreamName' => '<p>The name of the log stream to put log events to.</p>', 'SearchedLogStream$logStreamName' => '<p>The name of the log stream.</p>', ], ], 'LogStreamSearchedCompletely' => [ 'refs' => [ 'SearchedLogStream$searchedCompletely' => '<p>Indicates whether all the events in this log stream were searched or more data exists to search by paginating further.</p>', ], ], 'LogStreams' => [ 'base' => '<p>A list of log streams.</p>', 'refs' => [], ], 'MetricFilter' => [ 'base' => '<p>Metric filters can be used to express how Amazon CloudWatch Logs would extract metric observations from ingested log events and transform them to metric data in a CloudWatch metric.</p>', 'refs' => [], ], 'MetricFilterMatchRecord' => [ 'refs' => [], ], 'MetricFilterMatches' => [ 'refs' => [], ], 'MetricFilters' => [ 'refs' => [], ], 'MetricName' => [ 'base' => '<p>The name of the CloudWatch metric to which the monitored log information should be published. For example, you may publish to a metric called ErrorCount.</p>', 'refs' => [], ], 'MetricNamespace' => [ 'base' => '<p>The destination namespace of the new CloudWatch metric.</p>', 'refs' => [], ], 'MetricTransformation' => [ 'refs' => [], ], 'MetricTransformations' => [ 'refs' => [ 'PutMetricFilterRequest$metricTransformations' => '<p>A collection of information needed to define how metric data gets emitted.</p>', ], ], 'MetricValue' => [ 'base' => '<p>What to publish to the metric. For example, if you\'re counting the occurrences of a particular term like "Error", the value will be "1" for each occurrence. If you\'re counting the bytes transferred the published value will be the value in the log event.</p>', 'refs' => [], ], 'NextToken' => [ 'base' => '<p>A string token used for pagination that points to the next page of results. It must be a value obtained from the response of the previous request. The token expires after 24 hours.</p>', 'refs' => [ 'DescribeExportTasksRequest$nextToken' => '<p> A string token used for pagination that points to the next page of results. It must be a value obtained from the response of the previous <code class="code">DescribeExportTasks</code> request. </p>', 'DescribeLogGroupsRequest$nextToken' => '<p> A string token used for pagination that points to the next page of results. It must be a value obtained from the response of the previous <code class="code">DescribeLogGroups</code> request. </p>', 'DescribeLogStreamsRequest$nextToken' => '<p> A string token used for pagination that points to the next page of results. It must be a value obtained from the response of the previous <code class="code">DescribeLogStreams</code> request. </p>', 'DescribeMetricFiltersRequest$nextToken' => '<p> A string token used for pagination that points to the next page of results. It must be a value obtained from the response of the previous <code class="code">DescribeMetricFilters</code> request. </p>', 'FilterLogEventsRequest$nextToken' => '<p>A pagination token obtained from a <code class="code">FilterLogEvents</code> response to continue paginating the FilterLogEvents results.</p>', 'FilterLogEventsResponse$nextToken' => '<p>A pagination token obtained from a <code class="code">FilterLogEvents</code> response to continue paginating the FilterLogEvents results.</p>', 'GetLogEventsRequest$nextToken' => '<p> A string token used for pagination that points to the next page of results. It must be a value obtained from the <code class="code">nextForwardToken</code> or <code class="code">nextBackwardToken</code> fields in the response of the previous <code class="code">GetLogEvents</code> request. </p>', ], ], 'OperationAbortedException' => [ 'base' => '<p>Returned if multiple requests to update the same resource were in conflict.</p>', 'refs' => [], ], 'OrderBy' => [ 'refs' => [ 'DescribeLogStreamsRequest$orderBy' => '<p> Specifies what to order the returned log streams by. Valid arguments are \'LogStreamName\' or \'LastEventTime\'. If you don\'t specify a value, results are ordered by LogStreamName. If \'LastEventTime\' is chosen, the request cannot also contain a logStreamNamePrefix. </p>', ], ], 'OutputLogEvent' => [ 'refs' => [], ], 'OutputLogEvents' => [ 'refs' => [], ], 'PutDestinationPolicyRequest' => [ 'refs' => [], ], 'PutDestinationRequest' => [ 'refs' => [], ], 'PutDestinationResponse' => [ 'refs' => [], ], 'PutLogEventsRequest' => [ 'refs' => [], ], 'PutLogEventsResponse' => [ 'refs' => [], ], 'PutMetricFilterRequest' => [ 'refs' => [], ], 'PutRetentionPolicyRequest' => [ 'refs' => [], ], 'PutSubscriptionFilterRequest' => [ 'refs' => [], ], 'RejectedLogEventsInfo' => [ 'refs' => [], ], 'ResourceAlreadyExistsException' => [ 'base' => '<p>Returned if the specified resource already exists.</p>', 'refs' => [], ], 'ResourceNotFoundException' => [ 'base' => '<p>Returned if the specified resource does not exist.</p>', 'refs' => [], ], 'RoleArn' => [ 'refs' => [ 'Destination$roleArn' => '<p>A role for impersonation for delivering log events to the target.</p>', 'PutDestinationRequest$roleArn' => '<p>The ARN of an IAM role that grants Amazon CloudWatch Logs permissions to do Amazon Kinesis PutRecord requests on the desitnation stream.</p>', 'PutSubscriptionFilterRequest$roleArn' => '<p>The ARN of an IAM role that grants Amazon CloudWatch Logs permissions to deliver ingested log events to the destination stream. You don\'t need to provide the ARN when you are working with a logical destination (used via an ARN of <code>Destination</code>] for cross-account delivery.</p>', ], ], 'SearchedLogStream' => [ 'base' => '<p>An object indicating the search status of a log stream in a <code class="code">FilterLogEvents</code> request.</p>', 'refs' => [], ], 'SearchedLogStreams' => [ 'base' => '<p>A list of <code class="code">SearchedLogStream</code> objects indicating the search status for log streams in a <code class="code">FilterLogEvents</code> request.</p>', 'refs' => [ 'FilterLogEventsResponse$searchedLogStreams' => '<p>A list of <code class="code">SearchedLogStream</code> objects indicating which log streams have been searched in this request and whether each has been searched completely or still has more to be paginated.</p>', ], ], 'SequenceToken' => [ 'base' => '<p>A string token used for making PutLogEvents requests. A <code class="code">sequenceToken</code> can only be used once, and PutLogEvents requests must include the <code class="code">sequenceToken</code> obtained from the response of the previous request.</p>', 'refs' => [ 'PutLogEventsRequest$sequenceToken' => '<p> A string token that must be obtained from the response of the previous <code class="code">PutLogEvents</code> request. </p>', ], ], 'ServiceUnavailableException' => [ 'base' => '<p>Returned if the service cannot complete the request.</p>', 'refs' => [], ], 'StartFromHead' => [ 'refs' => [ 'GetLogEventsRequest$startFromHead' => '<p>If set to true, the earliest log events would be returned first. The default is false (the latest log events are returned first].</p>', ], ], 'StoredBytes' => [ 'refs' => [], ], 'SubscriptionFilter' => [ 'refs' => [], ], 'SubscriptionFilters' => [ 'refs' => [], ], 'TargetArn' => [ 'refs' => [ 'Destination$targetArn' => '<p>ARN of the physical target where the log events will be delivered (eg. ARN of a Kinesis stream].</p>', 'PutDestinationRequest$targetArn' => '<p>The ARN of an Amazon Kinesis stream to deliver matching log events to.</p>', ], ], 'TestEventMessages' => [ 'refs' => [ 'TestMetricFilterRequest$logEventMessages' => '<p>A list of log event messages to test.</p>', ], ], 'TestMetricFilterRequest' => [ 'refs' => [], ], 'TestMetricFilterResponse' => [ 'refs' => [], ], 'Timestamp' => [ 'base' => '<p>A point in time expressed as the number of milliseconds since Jan 1, 1970 00:00:00 UTC.</p>', 'refs' => [ 'CreateExportTaskRequest$from' => '<p>A unix timestamp indicating the start time of the range for the request. Events with a timestamp prior to this time will not be exported.</p>', 'CreateExportTaskRequest$to' => '<p>A unix timestamp indicating the end time of the range for the request. Events with a timestamp later than this time will not be exported.</p>', 'Destination$creationTime' => '<p>A point in time expressed as the number of milliseconds since Jan 1, 1970 00:00:00 UTC specifying when this destination was created.</p>', 'ExportTask$from' => '<p>A unix timestamp indicating the start time of the range for the request. Events with a timestamp prior to this time were not exported.</p>', 'ExportTask$to' => '<p>A unix timestamp indicating the end time of the range for the request. Events with a timestamp later than this time were not exported.</p>', 'ExportTaskExecutionInfo$completionTime' => '<p>A point in time when the export task got completed.</p>', 'ExportTaskExecutionInfo$creationTime' => '<p>A point in time when the export task got created.</p>', 'FilterLogEventsRequest$endTime' => '<p>A unix timestamp indicating the end time of the range for the request. If provided, events with a timestamp later than this time will not be returned.</p>', 'FilterLogEventsRequest$startTime' => '<p>A unix timestamp indicating the start time of the range for the request. If provided, events with a timestamp prior to this time will not be returned.</p>', ], ], 'Token' => [ 'refs' => [], ], 'Value' => [ 'refs' => [], ], ], 'service' => '<fullname>Amazon CloudWatch Logs API Reference</fullname> <p>This is the <i>Amazon CloudWatch Logs API Reference</i>. Amazon CloudWatch Logs enables you to monitor, store, and access your system, application, and custom log files. This guide provides detailed information about Amazon CloudWatch Logs actions, data types, parameters, and errors. For detailed information about Amazon CloudWatch Logs features and their associated API calls, go to the <a href="http://docs.aws.amazon.com/AmazonCloudWatch/latest/DeveloperGuide">Amazon CloudWatch Developer Guide</a>. </p> <p>Use the following links to get started using the <i>Amazon CloudWatch Logs API Reference</i>:</p> <ul> <li> <a href="http://docs.aws.amazon.com/AmazonCloudWatchLogs/latest/APIReference/API_Operations.html">Actions</a>: An alphabetical list of all Amazon CloudWatch Logs actions.</li> <li> <a href="http://docs.aws.amazon.com/AmazonCloudWatchLogs/latest/APIReference/API_Types.html">Data Types</a>: An alphabetical list of all Amazon CloudWatch Logs data types.</li> <li> <a href="http://docs.aws.amazon.com/AmazonCloudWatchLogs/latest/APIReference/CommonParameters.html">Common Parameters</a>: Parameters that all Query actions can use.</li> <li> <a href="http://docs.aws.amazon.com/AmazonCloudWatchLogs/latest/APIReference/CommonErrors.html">Common Errors</a>: Client and server errors that all actions can return.</li> <li> <a href="http://docs.aws.amazon.com/general/latest/gr/index.html?rande.html">Regions and Endpoints</a>: Itemized regions and endpoints for all AWS products.</li> </ul> <p>In addition to using the Amazon CloudWatch Logs API, you can also use the following SDKs and third-party libraries to access Amazon CloudWatch Logs programmatically.</p> <ul> <li><a href="http://aws.amazon.com/documentation/sdkforjava/">AWS SDK for Java Documentation</a></li> <li><a href="http://aws.amazon.com/documentation/sdkfornet/">AWS SDK for .NET Documentation</a></li> <li><a href="http://aws.amazon.com/documentation/sdkforphp/">AWS SDK for PHP Documentation</a></li> <li><a href="http://aws.amazon.com/documentation/sdkforruby/">AWS SDK for Ruby Documentation</a></li> </ul> <p>Developers in the AWS developer community also provide their own libraries, which you can find at the following AWS developer centers:</p> <ul> <li><a href="http://aws.amazon.com/java/">AWS Java Developer Center</a></li> <li><a href="http://aws.amazon.com/php/">AWS PHP Developer Center</a></li> <li><a href="http://aws.amazon.com/python/">AWS Python Developer Center</a></li> <li><a href="http://aws.amazon.com/ruby/">AWS Ruby Developer Center</a></li> <li><a href="http://aws.amazon.com/net/">AWS Windows and .NET Developer Center</a></li> </ul>',];
